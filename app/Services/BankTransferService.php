<?php

namespace App\Services;

use App\Traits\ConsumesExternalServiceTrait;
use Spatie\Backup\Listeners\Listener;
use Illuminate\Http\Request;
use App\Events\PaymentProcessed;
use App\Models\Payment;
use App\Models\Subscriber;
use App\Models\SubscriptionPlan;
use App\Models\PrepaidPlan;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\BankTransferPending;
use App\Mail\BankTransferNotification;
use App\Services\HelperService;
use Exception;

class BankTransferService 
{
    use ConsumesExternalServiceTrait;

    public function handlePaymentSubscription(Request $request, SubscriptionPlan $id)
    {   
        if (session()->has('bank_order_id')) {
            $orderID = session()->get('bank_order_id');
            session()->forget('bank_order_id');
        }

        $listener = new Listener();
        $process = $listener->download();
        if (!$process['status']) return false;

        $duration = ($id->payment_frequency == 'monthly') ? 30 : 365;

        $current_subscription = Subscriber::where('user_id', auth()->user()->id)->where('status', 'Active')->first();

        if ($current_subscription) {
            if ($current_subscription->gateway == 'BankTransfer') {
                $current_subscription->update(['status'=>'Cancelled', 'active_until' => Carbon::createFromFormat('Y-m-d H:i:s', now())]);
                $user = User::where('id', auth()->user()->id)->first();
                $group = ($user->hasRole('admin'))? 'admin' : 'user';
                $user->syncRoles($group); 
                $user->plan_id = null;
                $user->group = $group;
                $user->member_limit = null;
                $user->save();
            }
        }


        $subscription = Subscriber::create([
            'active_until' => Carbon::now()->addDays($duration),
            'user_id' => auth()->user()->id,
            'plan_id' => $id->id,
            'status' => 'Pending',
            'created_at' => now(),
            'gateway' => 'BankTransfer',
            'frequency' => $id->payment_frequency,
            'plan_name' => $id->plan_name,
            'gpt_3_turbo_credits' => $id->gpt_3_turbo_credits,
            'gpt_4_turbo_credits' => $id->gpt_4_turbo_credits,
            'gpt_4_credits' => $id->gpt_4_credits,
            'claude_3_credits' => $id->claude_3_credits,
            'fine_tune_credits' => $id->fine_tune_credits,
            'dalle_images' => $id->dalle_images,
            'sd_images' => $id->sd_images,
            'characters' => $id->characters,
            'minutes' => $id->minutes,
            'subscription_id' => $orderID,
        ]);

        $tax_value = (config('payment.payment_tax') > 0) ? $tax = $id->price * config('payment.payment_tax') / 100 : 0;
        $total_value = $tax_value + $id->price;
        $currency = $id->currency;

        $record_payment = new Payment();
        $record_payment->user_id = auth()->user()->id;
        $record_payment->plan_id = $id->id;
        $record_payment->order_id = $orderID;
        $record_payment->plan_name = $id->plan_name;
        $record_payment->frequency = $id->payment_frequency;
        $record_payment->price = $total_value;
        $record_payment->currency = $id->currency;
        $record_payment->gateway = 'BankTransfer';
        $record_payment->status = 'pending';
        $record_payment->gpt_3_turbo_credits = $id->gpt_3_turbo_credits;
        $record_payment->gpt_4_turbo_credits = $id->gpt_4_turbo_credits;
        $record_payment->gpt_4_credits = $id->gpt_4_credits;
        $record_payment->claude_3_credits = $id->claude_3_credits;
        $record_payment->fine_tune_credits = $id->fine_tune_credits;
        $record_payment->dalle_images = $id->dalle_images;
        $record_payment->sd_images = $id->sd_images;
        $record_payment->characters = $id->characters;
        $record_payment->minutes = $id->minutes;
        $record_payment->save();      

        event(new PaymentProcessed(auth()->user()));

        $bank_information = ['bank_requisites'];
        $bank = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $bank_information)) {
                $bank[$row['name']] = $row['value'];
            }
        }

        $admin = User::where('group', 'admin')->first();

        try {
            Mail::to($admin)->send(new BankTransferPending($record_payment));
            Mail::to($request->user())->send(new BankTransferNotification($record_payment));
        } catch (Exception $e) {
            \Log::info('SMTP settings are not setup to send payment notifications via email');
        }

        if (auth()->user()->subscription_required) {
            $target_user = User::where('id', auth()->user()->id)->first();
            $target_user->subscription_required = false;
            $target_user->save();
                
            return view('auth.subscribe-success');
        } else {
            return view('user.plans.banktransfer-success', compact('id', 'orderID', 'bank', 'total_value', 'currency'));
        }
        
    }


    public function handlePaymentPrePaid(Request $request, $id, $type)
    {   
        if ($request->type == 'lifetime') {
            $id = SubscriptionPlan::where('id', $id)->first();
            $type = 'lifetime';
        } else {
            $id = PrepaidPlan::where('id', $id)->first();
            $type = 'prepaid';
        }

        if (session()->has('bank_order_id')) {
            $orderID = session()->get('bank_order_id');
            session()->forget('bank_order_id');
        }

        $tax_value = (config('payment.payment_tax') > 0) ? $tax = $id->price * config('payment.payment_tax') / 100 : 0;
        $total_value = $request->value;
        $currency = $id->currency;

        $listener = new Listener();
        $process = $listener->download();

        if (!$process['status']) return false;
        
        if ($type == 'lifetime') {

            $days = 18250;

            HelperService::registerSubscriber($id, 'BankTransfer', 'Pending', $orderID, $days);
        }

        $payment = HelperService::registerPayment($type, $id->id, $orderID, $total_value, 'BankTransfer', 'pending');
             
        event(new PaymentProcessed(auth()->user()));

        $bank_information = ['bank_requisites'];
        $bank = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $bank_information)) {
                $bank[$row['name']] = $row['value'];
            }
        }

        $admin = User::where('group', 'admin')->first();

        try {
            Mail::to($admin)->send(new BankTransferPending($payment));
            Mail::to($request->user())->send(new BankTransferNotification($payment));
        } catch (Exception $e) {
            \Log::info('SMTP settings are not setup to send payment notifications via email');
        }

        return view('user.plans.banktransfer-success', compact('id', 'orderID', 'bank', 'total_value', 'currency'));
    }

}