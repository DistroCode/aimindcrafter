<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\CustomTemplate;
use App\Models\Template;
use App\Models\SubscriptionPlan;
use App\Models\PrepaidPlan;
use App\Models\Subscriber;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;

class HelperService 
{
    public static function getTotalWords()
    {   
        if (auth()->user()->gpt_3_turbo_credits != -1) {
            $value = number_format(auth()->user()->gpt_3_turbo_credits + auth()->user()->gpt_3_turbo_credits_prepaid);
        } else {
            $value = __('Unlimited');
        }
        
        return $value;
    }

    public static function getTotalImages()
    {   
        if (auth()->user()->available_dalle_images != -1) {
            $value = number_format(auth()->user()->available_dalle_images + auth()->user()->available_dalle_images_prepaid + auth()->user()->available_sd_images + auth()->user()->available_sd_images_prepaid);
        } else {
            $value = __('Unlimited');
        }
        
        return $value;
    }

    public static function getTotalMinutes()
    {   
        if (auth()->user()->available_minutes != -1) {
            $value = number_format(auth()->user()->available_minutes + auth()->user()->available_minutes_prepaid);
        } else {
            $value = __('Unlimited');
        }

        return $value;
    }

    public static function getTotalCharacters()
    {   
        if (auth()->user()->available_chars != -1) {
            $value = number_format(auth()->user()->available_chars + auth()->user()->available_chars_prepaid);
        } else {
            $value = __('Unlimited');
        }

        return $value;
    }

    public static function listTemplates()
    {   
        $all_templates = Template::orderBy('group', 'asc')->where('status', true)->get();
        return $all_templates;
    }

    public static function listCustomTemplates()
    {   
        $custom_templates = CustomTemplate::orderBy('group', 'asc')->where('user_id', auth()->user()->id)->where('status', true)->get();
        return $custom_templates;
    }

    public static function userAvailableWords()
    {   
        $value = self::numberFormat(auth()->user()->gpt_3_turbo_credits + auth()->user()->gpt_3_turbo_credits_prepaid);
        return $value;
    }

    public static function userAvailableGPT4TWords()
    {   
        $value = self::numberFormat(auth()->user()->gpt_4_turbo_credits + auth()->user()->gpt_4_turbo_credits_prepaid);
        return $value;
    }

    public static function userAvailableGPT4Words()
    {   
        $value = self::numberFormat(auth()->user()->gpt_4_credits + auth()->user()->gpt_4_credits_prepaid);
        return $value;
    }

    public static function userAvailableFineTuneWords()
    {   
        $value = self::numberFormat(auth()->user()->fine_tune_credits + auth()->user()->fine_tune_credits_prepaid);
        return $value;
    }

    public static function userAvailableClaudeOpusWords()
    {   
        $value = self::numberFormat(auth()->user()->claude_3_opus_credits + auth()->user()->claude_3_opus_credits_prepaid);
        return $value;
    }

    public static function userAvailableClaudeSonnetWords()
    {   
        $value = self::numberFormat(auth()->user()->claude_3_sonnet_credits + auth()->user()->claude_3_sonnet_credits_prepaid);
        return $value;
    }

    public static function userAvailableClaudeHaikuWords()
    {   
        $value = self::numberFormat(auth()->user()->claude_3_haiku_credits + auth()->user()->claude_3_haiku_credits_prepaid);
        return $value;
    }

    public static function userAvailableGeminiProWords()
    {   
        $value = self::numberFormat(auth()->user()->gemini_pro_credits + auth()->user()->gemini_pro_credits_prepaid);
        return $value;
    }

    public static function userPlanTotalWords()
    {   
        $value = self::numberFormat(auth()->user()->total_words);
        return $value;
    }

    public static function userAvailableDEImages()
    {   
        if (auth()->user()->available_dalle_images == -1) {
            return __('Unlimited');
        } else {
            $value = self::numberFormat(auth()->user()->available_dalle_images + auth()->user()->available_dalle_images_prepaid);
            return $value;
        }
    }

    public static function userAvailableSDImages()
    {   
        if (auth()->user()->available_sd_images == -1) {
            return __('Unlimited');
        } else {
            $value = self::numberFormat(auth()->user()->available_sd_images + auth()->user()->available_sd_images_prepaid);
            return $value;
        }
    }

    public static function userPlanTotalImages()
    {   
        $value = self::numberFormat(auth()->user()->total_images);
        return $value;
    }

    public static function userAvailableChars()
    {   
        $value = self::numberFormat(auth()->user()->available_chars + auth()->user()->available_chars_prepaid);
        return $value;
    }

    public static function userPlanTotalChars()
    {   
        $value = self::numberFormat(auth()->user()->total_chars);
        return $value;
    }

    public static function userAvailableMinutes()
    {   
        $value = self::minutesFormat(auth()->user()->available_minutes + auth()->user()->available_minutes_prepaid);
        return $value;
    }

    public static function userPlanTotalMinutes()
    {   
        $value = self::minutesFormat(auth()->user()->total_minutes);
        return $value;
    }

    public static function getPlanName()
    {   
        $subscription = SubscriptionPlan::where('id', auth()->user()->plan_id)->first();

        if ($subscription) {
            return $subscription->plan_name;
        } else {
            return 'Not Found';
        }
        
    }

    public static function getRenewalDate()
    {   
        $subscription = Subscriber::where('user_id', auth()->user()->id)->where('status', 'Active')->first();

        if ($subscription) {
            if ($subscription->frequency == 'lifetime') {
                return __('Free Forever');
            } else {
                return date_format(Carbon::parse($subscription->active_until), 'd M Y');
            }
        } else {
            return 'Not Found';
        }
        
    }

    public static function numberFormat($num) {

        if($num > 1000) {
      
              $x = round($num);
              $x_number_format = number_format($x);
              $x_array = explode(',', $x_number_format);
              $x_parts = array('K', 'M', 'B', 'T');
              $x_count_parts = count($x_array) - 1;
              $x_display = $x;
              $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
              $x_display .= $x_parts[$x_count_parts - 1];
      
              return $x_display;
      
        }
      
        return $num;
    }

    public static function minutesFormat($num) {

        $num = floor($num);

        if($num > 1000) {
      
              $x = round($num);
              $x_number_format = number_format($x);
              $x_array = explode(',', $x_number_format);
              $x_parts = array('K', 'M', 'B', 'T');
              $x_count_parts = count($x_array) - 1;
              $x_display = $x;
              $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
              $x_display .= $x_parts[$x_count_parts - 1];
      
              return $x_display;
      
        }
      
        return $num;
    }


    public static function checkBrandsFeature()
    {   
        if (!is_null(auth()->user()->plan_id)) {
            $plan = SubscriptionPlan::where('id', auth()->user()->plan_id)->first();
            if (!is_null($plan->brand_voice_feature)) {
                return $plan->brand_voice_feature;
            } else {
                return false;
            }
            
        } else {
            if (config('settings.brand_voice_user_access') == 'allow') {
                return true;
            } else {
                return false;
            }
        }
    }


    /**
	*
	* Check if user has sufficient credits for each model
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public static function creditCheck($model, $max_tokens)
    {
        if ($model == 'gpt-3.5-turbo-0125') {
            if (auth()->user()->gpt_3_turbo_credits != -1) {
                if ((auth()->user()->gpt_3_turbo_credits + auth()->user()->gpt_3_turbo_credits_prepaid) < $max_tokens) {
                    if (!is_null(auth()->user()->member_of)) {
                        if (auth()->user()->member_use_credits_template) {
                            $member = User::where('id', auth()->user()->member_of)->first();
                            if (($member->gpt_3_turbo_credits + $member->gpt_3_turbo_credits_prepaid) < $max_tokens) {
                                $data['status'] = 'error';
                                $data['message'] = __('Not enough balance to proceed for GPT 3.5 Turbo models, subscribe or top up');
                                return $data;
                            }
                        } else {
                            $data['status'] = 'error';
                            $data['message'] = __('Not enough balance to proceed for GPT 3.5 Turbo models, subscribe or top up');
                            return $data;
                        }
                        
                    } else {
                        $data['status'] = 'error';
                        $data['message'] = __('Not enough balance to proceed for GPT 3.5 Turbo models, subscribe or top up');
                        return $data;
                    } 
                }
            }

        } elseif ($model == 'gpt-4') {
            if (auth()->user()->gpt_4_credits != -1) {
                if ((auth()->user()->gpt_4_credits + auth()->user()->gpt_4_credits_prepaid) < $max_tokens) {
                    if (!is_null(auth()->user()->member_of)) {
                        if (auth()->user()->member_use_credits_template) {
                            $member = User::where('id', auth()->user()->member_of)->first();
                            if (($member->gpt_4_credits + $member->gpt_4_credits_prepaid) < $max_tokens) {
                                $data['status'] = 'error';
                                $data['message'] = __('Not enough balance to proceed for GPT 4 model, upgrade or top up');
                                return $data;
                            }
                        } else {
                            $data['status'] = 'error';
                            $data['message'] = __('Not enough balance to proceed for GPT 4 model, upgrade or top up');
                            return $data;
                        }
                        
                    } else {
                        $data['status'] = 'error';
                        $data['message'] = __('Not enough balance to proceed for GPT 4 model, upgrade or top up');
                        return $data;
                    } 
                }
            }
        } elseif ($model == 'gpt-4-0125-preview' || $model == 'gpt-4-turbo-2024-04-09') {
            if (auth()->user()->gpt_4_turbo_credits != -1) {
                if ((auth()->user()->gpt_4_turbo_credits + auth()->user()->gpt_4_turbo_credits_prepaid) < $max_tokens) {
                    if (!is_null(auth()->user()->member_of)) {
                        if (auth()->user()->member_use_credits_template) {
                            $member = User::where('id', auth()->user()->member_of)->first();
                            if (($member->gpt_4_turbo_credits + $member->gpt_4_turbo_credits_prepaid) < $max_tokens) {
                                $data['status'] = 'error';
                                $data['message'] = __('Not enough balance to proceed for GPT 4 Turbo model, upgrade or top up');
                                return $data;
                            }
                        } else {
                            $data['status'] = 'error';
                            $data['message'] = __('Not enough balance to proceed for GPT 4 Turbo model, upgrade or top up');
                            return $data;
                        }
                        
                    } else {
                        $data['status'] = 'error';
                        $data['message'] = __('Not enough balance to proceed for GPT 4 Turbo model, upgrade or top up');
                        return $data;
                    } 
                }
            }
        } elseif ($model == 'claude-3-opus-20240229') {
            if (auth()->user()->claude_3_opus_credits != -1) {
                if ((auth()->user()->claude_3_opus_credits + auth()->user()->claude_3_opus_credits_prepaid) < $max_tokens) {
                    if (!is_null(auth()->user()->member_of)) {
                        if (auth()->user()->member_use_credits_template) {
                            $member = User::where('id', auth()->user()->member_of)->first();
                            if (($member->claude_3_opus_credits + $member->claude_3_opus_credits_prepaid) < $max_tokens) {
                                $data['status'] = 'error';
                                $data['message'] = __('Not enough balance to proceed for Claude 3 Opus model, upgrade or top up');
                                return $data;
                            }
                        } else {
                            $data['status'] = 'error';
                            $data['message'] = __('Not enough balance to proceed for Claude 3 Opus model, upgrade or top up');
                            return $data;
                        }
                        
                    } else {
                        $data['status'] = 'error';
                        $data['message'] = __('Not enough balance to proceed for Claude 3 Opus model, upgrade or top up');
                        return $data;
                    } 
                }
            }
        } elseif ($model == 'claude-3-sonnet-20240229') {
            if (auth()->user()->claude_3_sonnet_credits != -1) {
                if ((auth()->user()->claude_3_sonnet_credits + auth()->user()->claude_3_sonnet_credits_prepaid) < $max_tokens) {
                    if (!is_null(auth()->user()->member_of)) {
                        if (auth()->user()->member_use_credits_template) {
                            $member = User::where('id', auth()->user()->member_of)->first();
                            if (($member->claude_3_sonnet_credits + $member->claude_3_sonnet_credits_prepaid) < $max_tokens) {
                                $data['status'] = 'error';
                                $data['message'] = __('Not enough balance to proceed for Claude 3 Sonnet model, upgrade or top up');
                                return $data;
                            }
                        } else {
                            $data['status'] = 'error';
                            $data['message'] = __('Not enough balance to proceed for Claude 3 Sonnet model, upgrade or top up');
                            return $data;
                        }
                        
                    } else {
                        $data['status'] = 'error';
                        $data['message'] = __('Not enough balance to proceed for Claude 3 Sonnet model, upgrade or top up');
                        return $data;
                    } 
                }
            }
        } elseif ($model == 'claude-3-haiku-20240307') {
            if (auth()->user()->claude_3_haiku_credits != -1) {
                if ((auth()->user()->claude_3_haiku_credits + auth()->user()->claude_3_haiku_credits_prepaid) < $max_tokens) {
                    if (!is_null(auth()->user()->member_of)) {
                        if (auth()->user()->member_use_credits_template) {
                            $member = User::where('id', auth()->user()->member_of)->first();
                            if (($member->claude_3_haiku_credits + $member->claude_3_haiku_credits_prepaid) < $max_tokens) {
                                $data['status'] = 'error';
                                $data['message'] = __('Not enough balance to proceed for Claude 3 Haiku model, upgrade or top up');
                                return $data;
                            }
                        } else {
                            $data['status'] = 'error';
                            $data['message'] = __('Not enough balance to proceed for Claude 3 Haiku model, upgrade or top up');
                            return $data;
                        }
                        
                    } else {
                        $data['status'] = 'error';
                        $data['message'] = __('Not enough balance to proceed for Claude 3 Haiku model, upgrade or top up');
                        return $data;
                    } 
                }
            }
        } elseif ($model == 'gemini_pro') {
            if (auth()->user()->gemini_pro_credits != -1) {
                if ((auth()->user()->gemini_pro_credits + auth()->user()->gemini_pro_credits_prepaid) < $max_tokens) {
                    if (!is_null(auth()->user()->member_of)) {
                        if (auth()->user()->member_use_credits_template) {
                            $member = User::where('id', auth()->user()->member_of)->first();
                            if (($member->gemini_pro_credits + $member->gemini_pro_credits_prepaid) < $max_tokens) {
                                $data['status'] = 'error';
                                $data['message'] = __('Not enough balance to proceed for Gemini Pro model, upgrade or top up');
                                return $data;
                            }
                        } else {
                            $data['status'] = 'error';
                            $data['message'] = __('Not enough balance to proceed for Gemini Pro model, upgrade or top up');
                            return $data;
                        }
                        
                    } else {
                        $data['status'] = 'error';
                        $data['message'] = __('Not enough balance to proceed for Gemini Pro model, upgrade or top up');
                        return $data;
                    } 
                }
            }
        } else {
            if (auth()->user()->fine_tune_credits != -1) {
                if ((auth()->user()->fine_tune_credits + auth()->user()->fine_tune_credits_prepaid) < $max_tokens) {
                    if (!is_null(auth()->user()->member_of)) {
                        if (auth()->user()->member_use_credits_template) {
                            $member = User::where('id', auth()->user()->member_of)->first();
                            if (($member->fine_tune_credits + $member->fine_tune_credits_prepaid) < $max_tokens) {
                                $data['status'] = 'error';
                                $data['message'] = __('Not enough balance to proceed for Fine Tune models, upgrade or top up');
                                return $data;
                            }
                        } else {
                            $data['status'] = 'error';
                            $data['message'] = __('Not enough balance to proceed for Fine Tune models, upgrade or top up');
                            return $data;
                        }
                        
                    } else {
                        $data['status'] = 'error';
                        $data['message'] = __('Not enough balance to proceed for Fine Tune models, upgrade or top up');
                        return $data;
                    } 
                }
            }
        }
        
    }


     /**
	*
	* Update user word balance for each model
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public static function updateBalance($words, $model) {

        $user = User::find(Auth::user()->id);

        if ($model == 'gpt-3.5-turbo-0125') {
            if (auth()->user()->gpt_3_turbo_credits != -1) {

                if (Auth::user()->gpt_3_turbo_credits > $words) {

                    $total_words = Auth::user()->gpt_3_turbo_credits - $words;
                    $user->gpt_3_turbo_credits = ($total_words < 0) ? 0 : $total_words;
                    $user->update();
        
                } elseif (Auth::user()->gpt_3_turbo_credits_prepaid > $words) {
        
                    $total_words_prepaid = Auth::user()->gpt_3_turbo_credits_prepaid - $words;
                    $user->gpt_3_turbo_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                    $user->update();
        
                } elseif ((Auth::user()->gpt_3_turbo_credits + Auth::user()->gpt_3_turbo_credits_prepaid) == $words) {
        
                    $user->gpt_3_turbo_credits = 0;
                    $user->gpt_3_turbo_credits_prepaid = 0;
                    $user->update();
        
                } else {
        
                    if (!is_null(Auth::user()->member_of)) {
        
                        $member = User::where('id', Auth::user()->member_of)->first();
        
                        if ($member->gpt_3_turbo_credits > $words) {
        
                            $total_words = $member->gpt_3_turbo_credits - $words;
                            $member->gpt_3_turbo_credits = ($total_words < 0) ? 0 : $total_words;
                
                        } elseif ($member->gpt_3_turbo_credits_prepaid > $words) {
                
                            $total_words_prepaid = $member->gpt_3_turbo_credits_prepaid - $words;
                            $member->gpt_3_turbo_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                
                        } elseif (($member->gpt_3_turbo_credits + $member->gpt_3_turbo_credits_prepaid) == $words) {
                
                            $member->gpt_3_turbo_credits = 0;
                            $member->gpt_3_turbo_credits_prepaid = 0;
                
                        } else {
                            $remaining = $words - $member->gpt_3_turbo_credits;
                            $member->gpt_3_turbo_credits = 0;
            
                            $prepaid_left = $member->gpt_3_turbo_credits_prepaid - $remaining;
                            $member->gpt_3_turbo_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        }
        
                        $member->update();
        
                    } else {
                        $remaining = $words - Auth::user()->gpt_3_turbo_credits;
                        $user->gpt_3_turbo_credits = 0;
        
                        $prepaid_left = Auth::user()->gpt_3_turbo_credits_prepaid - $remaining;
                        $user->gpt_3_turbo_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        $user->update();
                    }
                }
            } 

            return true;

        } elseif ($model == 'gpt-4-0125-preview' || $model == 'gpt-4-turbo-2024-04-09') {
            if (auth()->user()->gpt_4_turbo_credits != -1) {

                if (Auth::user()->gpt_4_turbo_credits > $words) {

                    $total_words = Auth::user()->gpt_4_turbo_credits - $words;
                    $user->gpt_4_turbo_credits = ($total_words < 0) ? 0 : $total_words;
                    $user->update();
        
                } elseif (Auth::user()->gpt_4_turbo_credits_prepaid > $words) {
        
                    $total_words_prepaid = Auth::user()->gpt_4_turbo_credits_prepaid - $words;
                    $user->gpt_4_turbo_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                    $user->update();
        
                } elseif ((Auth::user()->gpt_4_turbo_credits + Auth::user()->gpt_4_turbo_credits_prepaid) == $words) {
        
                    $user->gpt_4_turbo_credits = 0;
                    $user->gpt_4_turbo_credits_prepaid = 0;
                    $user->update();
        
                } else {
        
                    if (!is_null(Auth::user()->member_of)) {
        
                        $member = User::where('id', Auth::user()->member_of)->first();
        
                        if ($member->gpt_4_turbo_credits > $words) {
        
                            $total_words = $member->gpt_4_turbo_credits - $words;
                            $member->gpt_4_turbo_credits = ($total_words < 0) ? 0 : $total_words;
                
                        } elseif ($member->gpt_4_turbo_credits_prepaid > $words) {
                
                            $total_words_prepaid = $member->gpt_4_turbo_credits_prepaid - $words;
                            $member->gpt_4_turbo_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                
                        } elseif (($member->gpt_4_turbo_credits + $member->gpt_4_turbo_credits_prepaid) == $words) {
                
                            $member->gpt_4_turbo_credits = 0;
                            $member->gpt_4_turbo_credits_prepaid = 0;
                
                        } else {
                            $remaining = $words - $member->gpt_4_turbo_credits;
                            $member->gpt_4_turbo_credits = 0;
            
                            $prepaid_left = $member->gpt_4_turbo_credits_prepaid - $remaining;
                            $member->gpt_4_turbo_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        }
        
                        $member->update();
        
                    } else {
                        $remaining = $words - Auth::user()->gpt_4_turbo_credits;
                        $user->gpt_4_turbo_credits = 0;
        
                        $prepaid_left = Auth::user()->gpt_4_turbo_credits_prepaid - $remaining;
                        $user->gpt_4_turbo_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        $user->update();
                    }
                }
            } 

            return true;

        } elseif ($model == 'gpt-4') {
            if (auth()->user()->gpt_4_credits != -1) {

                if (Auth::user()->gpt_4_credits > $words) {

                    $total_words = Auth::user()->gpt_4_credits - $words;
                    $user->gpt_4_credits = ($total_words < 0) ? 0 : $total_words;
                    $user->update();
        
                } elseif (Auth::user()->gpt_4_credits_prepaid > $words) {
        
                    $total_words_prepaid = Auth::user()->gpt_4_credits_prepaid - $words;
                    $user->gpt_4_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                    $user->update();
        
                } elseif ((Auth::user()->gpt_4_credits + Auth::user()->gpt_4_credits_prepaid) == $words) {
        
                    $user->gpt_4_credits = 0;
                    $user->gpt_4_credits_prepaid = 0;
                    $user->update();
        
                } else {
        
                    if (!is_null(Auth::user()->member_of)) {
        
                        $member = User::where('id', Auth::user()->member_of)->first();
        
                        if ($member->gpt_4_credits > $words) {
        
                            $total_words = $member->gpt_4_credits - $words;
                            $member->gpt_4_credits = ($total_words < 0) ? 0 : $total_words;
                
                        } elseif ($member->gpt_4_credits_prepaid > $words) {
                
                            $total_words_prepaid = $member->gpt_4_credits_prepaid - $words;
                            $member->gpt_4_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                
                        } elseif (($member->gpt_4_credits + $member->gpt_4_credits_prepaid) == $words) {
                
                            $member->gpt_4_credits = 0;
                            $member->gpt_4_credits_prepaid = 0;
                
                        } else {
                            $remaining = $words - $member->gpt_4_credits;
                            $member->gpt_4_credits = 0;
            
                            $prepaid_left = $member->gpt_4_credits_prepaid - $remaining;
                            $member->gpt_4_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        }
        
                        $member->update();
        
                    } else {
                        $remaining = $words - Auth::user()->gpt_4_credits;
                        $user->gpt_4_credits = 0;
        
                        $prepaid_left = Auth::user()->gpt_4_credits_prepaid - $remaining;
                        $user->gpt_4_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        $user->update();
                    }
                }
            } 

            return true;

        } elseif ($model == 'claude-3-opus-20240229') {
            if (auth()->user()->claude_3_opus_credits != -1) {

                if (Auth::user()->claude_3_opus_credits > $words) {

                    $total_words = Auth::user()->claude_3_opus_credits - $words;
                    $user->claude_3_opus_credits = ($total_words < 0) ? 0 : $total_words;
                    $user->update();
        
                } elseif (Auth::user()->claude_3_opus_credits_prepaid > $words) {
        
                    $total_words_prepaid = Auth::user()->claude_3_opus_credits_prepaid - $words;
                    $user->claude_3_opus_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                    $user->update();
        
                } elseif ((Auth::user()->claude_3_opus_credits + Auth::user()->claude_3_opus_credits_prepaid) == $words) {
        
                    $user->claude_3_opus_credits = 0;
                    $user->claude_3_opus_credits_prepaid = 0;
                    $user->update();
        
                } else {
        
                    if (!is_null(Auth::user()->member_of)) {
        
                        $member = User::where('id', Auth::user()->member_of)->first();
        
                        if ($member->claude_3_opus_credits > $words) {
        
                            $total_words = $member->claude_3_opus_credits - $words;
                            $member->claude_3_opus_credits = ($total_words < 0) ? 0 : $total_words;
                
                        } elseif ($member->claude_3_opus_credits_prepaid > $words) {
                
                            $total_words_prepaid = $member->claude_3_opus_credits_prepaid - $words;
                            $member->claude_3_opus_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                
                        } elseif (($member->claude_3_opus_credits + $member->claude_3_opus_credits_prepaid) == $words) {
                
                            $member->claude_3_opus_credits = 0;
                            $member->claude_3_opus_credits_prepaid = 0;
                
                        } else {
                            $remaining = $words - $member->claude_3_opus_credits;
                            $member->claude_3_opus_credits = 0;
            
                            $prepaid_left = $member->claude_3_opus_credits_prepaid - $remaining;
                            $member->claude_3_opus_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        }
        
                        $member->update();
        
                    } else {
                        $remaining = $words - Auth::user()->claude_3_opus_credits;
                        $user->claude_3_opus_credits = 0;
        
                        $prepaid_left = Auth::user()->claude_3_opus_credits_prepaid - $remaining;
                        $user->claude_3_opus_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        $user->update();
                    }
                }
            } 

            return true;

        } elseif ($model == 'claude-3-sonnet-20240229') {
            if (auth()->user()->claude_3_sonnet_credits != -1) {

                if (Auth::user()->claude_3_sonnet_credits > $words) {

                    $total_words = Auth::user()->claude_3_sonnet_credits - $words;
                    $user->claude_3_sonnet_credits = ($total_words < 0) ? 0 : $total_words;
                    $user->update();
        
                } elseif (Auth::user()->claude_3_sonnet_credits_prepaid > $words) {
        
                    $total_words_prepaid = Auth::user()->claude_3_sonnet_credits_prepaid - $words;
                    $user->claude_3_sonnet_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                    $user->update();
        
                } elseif ((Auth::user()->claude_3_sonnet_credits + Auth::user()->claude_3_sonnet_credits_prepaid) == $words) {
        
                    $user->claude_3_sonnet_credits = 0;
                    $user->claude_3_sonnet_credits_prepaid = 0;
                    $user->update();
        
                } else {
        
                    if (!is_null(Auth::user()->member_of)) {
        
                        $member = User::where('id', Auth::user()->member_of)->first();
        
                        if ($member->claude_3_sonnet_credits > $words) {
        
                            $total_words = $member->claude_3_sonnet_credits - $words;
                            $member->claude_3_sonnet_credits = ($total_words < 0) ? 0 : $total_words;
                
                        } elseif ($member->claude_3_sonnet_credits_prepaid > $words) {
                
                            $total_words_prepaid = $member->claude_3_sonnet_credits_prepaid - $words;
                            $member->claude_3_sonnet_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                
                        } elseif (($member->claude_3_sonnet_credits + $member->claude_3_sonnet_credits_prepaid) == $words) {
                
                            $member->claude_3_sonnet_credits = 0;
                            $member->claude_3_sonnet_credits_prepaid = 0;
                
                        } else {
                            $remaining = $words - $member->claude_3_sonnet_credits;
                            $member->claude_3_sonnet_credits = 0;
            
                            $prepaid_left = $member->claude_3_sonnet_credits_prepaid - $remaining;
                            $member->claude_3_sonnet_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        }
        
                        $member->update();
        
                    } else {
                        $remaining = $words - Auth::user()->claude_3_sonnet_credits;
                        $user->claude_3_sonnet_credits = 0;
        
                        $prepaid_left = Auth::user()->claude_3_sonnet_credits_prepaid - $remaining;
                        $user->claude_3_sonnet_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        $user->update();
                    }
                }
            } 

            return true;

        } elseif ($model == 'claude-3-haiku-20240307') {
            if (auth()->user()->claude_3_haiku_credits != -1) {

                if (Auth::user()->claude_3_haiku_credits > $words) {

                    $total_words = Auth::user()->claude_3_haiku_credits - $words;
                    $user->claude_3_haiku_credits = ($total_words < 0) ? 0 : $total_words;
                    $user->update();
        
                } elseif (Auth::user()->claude_3_haiku_credits_prepaid > $words) {
        
                    $total_words_prepaid = Auth::user()->claude_3_haiku_credits_prepaid - $words;
                    $user->claude_3_haiku_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                    $user->update();
        
                } elseif ((Auth::user()->claude_3_haiku_credits + Auth::user()->claude_3_haiku_credits_prepaid) == $words) {
        
                    $user->claude_3_haiku_credits = 0;
                    $user->claude_3_haiku_credits_prepaid = 0;
                    $user->update();
        
                } else {
        
                    if (!is_null(Auth::user()->member_of)) {
        
                        $member = User::where('id', Auth::user()->member_of)->first();
        
                        if ($member->claude_3_haiku_credits > $words) {
        
                            $total_words = $member->claude_3_haiku_credits - $words;
                            $member->claude_3_haiku_credits = ($total_words < 0) ? 0 : $total_words;
                
                        } elseif ($member->claude_3_haiku_credits_prepaid > $words) {
                
                            $total_words_prepaid = $member->claude_3_haiku_credits_prepaid - $words;
                            $member->claude_3_haiku_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                
                        } elseif (($member->claude_3_haiku_credits + $member->claude_3_haiku_credits_prepaid) == $words) {
                
                            $member->claude_3_haiku_credits = 0;
                            $member->claude_3_haiku_credits_prepaid = 0;
                
                        } else {
                            $remaining = $words - $member->claude_3_haiku_credits;
                            $member->claude_3_haiku_credits = 0;
            
                            $prepaid_left = $member->claude_3_haiku_credits_prepaid - $remaining;
                            $member->claude_3_haiku_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        }
        
                        $member->update();
        
                    } else {
                        $remaining = $words - Auth::user()->claude_3_haiku_credits;
                        $user->claude_3_haiku_credits = 0;
        
                        $prepaid_left = Auth::user()->claude_3_haiku_credits_prepaid - $remaining;
                        $user->claude_3_haiku_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        $user->update();
                    }
                }
            } 

            return true;

        } elseif ($model == 'gemini_pro') {
            if (auth()->user()->gemini_pro_credits != -1) {

                if (Auth::user()->gemini_pro_credits > $words) {

                    $total_words = Auth::user()->gemini_pro_credits - $words;
                    $user->gemini_pro_credits = ($total_words < 0) ? 0 : $total_words;
                    $user->update();
        
                } elseif (Auth::user()->gemini_pro_credits_prepaid > $words) {
        
                    $total_words_prepaid = Auth::user()->gemini_pro_credits_prepaid - $words;
                    $user->gemini_pro_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                    $user->update();
        
                } elseif ((Auth::user()->gemini_pro_credits + Auth::user()->gemini_pro_credits_prepaid) == $words) {
        
                    $user->gemini_pro_credits = 0;
                    $user->gemini_pro_credits_prepaid = 0;
                    $user->update();
        
                } else {
        
                    if (!is_null(Auth::user()->member_of)) {
        
                        $member = User::where('id', Auth::user()->member_of)->first();
        
                        if ($member->gemini_pro_credits > $words) {
        
                            $total_words = $member->gemini_pro_credits - $words;
                            $member->gemini_pro_credits = ($total_words < 0) ? 0 : $total_words;
                
                        } elseif ($member->gemini_pro_credits_prepaid > $words) {
                
                            $total_words_prepaid = $member->gemini_pro_credits_prepaid - $words;
                            $member->gemini_pro_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                
                        } elseif (($member->gemini_pro_credits + $member->gemini_pro_credits_prepaid) == $words) {
                
                            $member->gemini_pro_credits = 0;
                            $member->gemini_pro_credits_prepaid = 0;
                
                        } else {
                            $remaining = $words - $member->gemini_pro_credits;
                            $member->gemini_pro_credits = 0;
            
                            $prepaid_left = $member->gemini_pro_credits_prepaid - $remaining;
                            $member->gemini_pro_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        }
        
                        $member->update();
        
                    } else {
                        $remaining = $words - Auth::user()->gemini_pro_credits;
                        $user->gemini_pro_credits = 0;
        
                        $prepaid_left = Auth::user()->gemini_pro_credits_prepaid - $remaining;
                        $user->gemini_pro_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        $user->update();
                    }
                }
            } 

            return true;

        } else {
            if (auth()->user()->fine_tune_credits != -1) {

                if (Auth::user()->fine_tune_credits > $words) {

                    $total_words = Auth::user()->fine_tune_credits - $words;
                    $user->fine_tune_credits = ($total_words < 0) ? 0 : $total_words;
                    $user->update();
        
                } elseif (Auth::user()->fine_tune_credits_prepaid > $words) {
        
                    $total_words_prepaid = Auth::user()->fine_tune_credits_prepaid - $words;
                    $user->fine_tune_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                    $user->update();
        
                } elseif ((Auth::user()->fine_tune_credits + Auth::user()->fine_tune_credits_prepaid) == $words) {
        
                    $user->fine_tune_credits = 0;
                    $user->fine_tune_credits_prepaid = 0;
                    $user->update();
        
                } else {
        
                    if (!is_null(Auth::user()->member_of)) {
        
                        $member = User::where('id', Auth::user()->member_of)->first();
        
                        if ($member->fine_tune_credits > $words) {
        
                            $total_words = $member->fine_tune_credits - $words;
                            $member->fine_tune_credits = ($total_words < 0) ? 0 : $total_words;
                
                        } elseif ($member->fine_tune_credits_prepaid > $words) {
                
                            $total_words_prepaid = $member->fine_tune_credits_prepaid - $words;
                            $member->fine_tune_credits_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;
                
                        } elseif (($member->fine_tune_credits + $member->fine_tune_credits_prepaid) == $words) {
                
                            $member->fine_tune_credits = 0;
                            $member->fine_tune_credits_prepaid = 0;
                
                        } else {
                            $remaining = $words - $member->fine_tune_credits;
                            $member->fine_tune_credits = 0;
            
                            $prepaid_left = $member->fine_tune_credits_prepaid - $remaining;
                            $member->fine_tune_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        }
        
                        $member->update();
        
                    } else {
                        $remaining = $words - Auth::user()->fine_tune_credits;
                        $user->fine_tune_credits = 0;
        
                        $prepaid_left = Auth::user()->fine_tune_credits_prepaid - $remaining;
                        $user->fine_tune_credits_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;
                        $user->update();
                    }
                }
            } 

            return true;
        }

    }


    /**
	*
	* Register subscriber for lifetime plan
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public static function registerSubscriber(SubscriptionPlan $id, $gateway, $status, $order, $days)
    {

        $subscription = Subscriber::create([
            'user_id' => auth()->user()->id,
            'plan_id' => $id->id,
            'status' => $status,
            'created_at' => now(),
            'gateway' => $gateway,
            'frequency' => 'lifetime',
            'plan_name' => $id->plan_name,
            'gpt_3_turbo_credits' => $id->gpt_3_turbo_credits,
            'gpt_4_turbo_credits' => $id->gpt_4_turbo_credits,
            'gpt_4_credits' => $id->gpt_4_credits,
            'claude_3_opus_credits' => $id->claude_3_opus_credits,
            'claude_3_sonnet_credits' => $id->claude_3_sonnet_credits,
            'claude_3_haiku_credits' => $id->claude_3_haiku_credits,
            'fine_tune_credits' => $id->fine_tune_credits,
            'gemini_pro_credits' => $id->gemini_pro_credits,
            'dalle_images' => $id->dalle_images,
            'sd_images' => $id->sd_images,
            'characters' => $id->characters,
            'minutes' => $id->minutes,
            'subscription_id' => $order,
            'active_until' => Carbon::now()->addDays($days),
        ]);  
    }


    /**
	*
	* Register prepaid plan payment
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public static function registerPayment($type, $id, $order, $price, $gateway, $status)
    {
        if ($type == 'prepaid') {
            $id = PrepaidPlan::where('id', $id)->first();
        } else {
            $id = SubscriptionPlan::where('id', $id)->first();
        }

        $record_payment = new Payment();
        $record_payment->user_id = auth()->user()->id;
        $record_payment->order_id = $order;
        $record_payment->plan_id = $id->id;
        $record_payment->plan_name = $id->plan_name;
        $record_payment->price = $price;
        $record_payment->frequency = $type;
        $record_payment->currency = $id->currency;
        $record_payment->gateway = $gateway;
        $record_payment->status = $status;
        $record_payment->gpt_3_turbo_credits = ($type == 'lifetime') ? $id->gpt_3_turbo_credits : $id->gpt_3_turbo_credits_prepaid;
        $record_payment->gpt_4_turbo_credits = ($type == 'lifetime') ? $id->gpt_4_turbo_credits : $id->gpt_4_turbo_credits_prepaid;
        $record_payment->gpt_4_credits = ($type == 'lifetime') ? $id->gpt_4_credits : $id->gpt_4_credits_prepaid;
        $record_payment->claude_3_opus_credits = ($type == 'lifetime') ? $id->claude_3_opus_credits : $id->claude_3_opus_credits_prepaid;
        $record_payment->claude_3_sonnet_credits = ($type == 'lifetime') ? $id->claude_3_sonnet_credits : $id->claude_3_sonnet_credits_prepaid;
        $record_payment->claude_3_haiku_credits = ($type == 'lifetime') ? $id->claude_3_haiku_credits : $id->claude_3_haiku_credits_prepaid;
        $record_payment->fine_tune_credits = ($type == 'lifetime') ? $id->fine_tune_credits : $id->fine_tune_credits_prepaid;
        $record_payment->gemini_pro_credits = ($type == 'lifetime') ? $id->gemini_pro_credits : $id->gemini_pro_credits_prepaid;
        $record_payment->dalle_images = $id->dalle_images;
        $record_payment->sd_images = $id->sd_images;
        $record_payment->characters = $id->characters;
        $record_payment->minutes = $id->minutes;
        $record_payment->save();

        return $record_payment;
    }


    /**
	*
	* Assign prepaid and lifetime credits
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public static function registerCredits($type, $id)
    {
        if ($type == 'prepaid') {
            $plan = PrepaidPlan::where('id', $id)->first();
        } else {
            $plan = SubscriptionPlan::where('id', $id)->first();
        }
        
        $user = User::where('id',auth()->user()->id)->first();

        if ($type == 'lifetime') {
            $group = (auth()->user()->hasRole('admin'))? 'admin' : 'subscriber';
            $user->syncRoles($group);    
            $user->group = $group;
            $user->plan_id = $plan->id;
            $user->gpt_3_turbo_credits = $plan->gpt_3_turbo_credits;
            $user->gpt_4_turbo_credits = $plan->gpt_4_turbo_credits;
            $user->gpt_4_credits = $plan->gpt_4_credits;
            $user->claude_3_opus_credits = $plan->claude_3_opus_credits;
            $user->claude_3_sonnet_credits = $plan->claude_3_sonnet_credits;
            $user->claude_3_haiku_credits = $plan->claude_3_haiku_credits;
            $user->fine_tune_credits = $plan->fine_tune_credits;
            $user->gemini_pro_credits = $plan->gemini_pro_credits;
            $user->available_chars = $plan->characters;
            $user->available_minutes = $plan->minutes;
            $user->member_limit = $plan->team_members;
            $user->available_dalle_images = $plan->dalle_images;
            $user->available_sd_images = $plan->sd_images;
        } else {
            $user->gpt_3_turbo_credits_prepaid = ($user->gpt_3_turbo_credits_prepaid + $plan->gpt_3_turbo_credits_prepaid);
            $user->gpt_4_turbo_credits_prepaid = ($user->gpt_4_turbo_credits_prepaid + $plan->gpt_4_turbo_credits_prepaid);
            $user->gpt_4_credits_prepaid = ($user->gpt_4_credits_prepaid + $plan->gpt_4_credits_prepaid);
            $user->fine_tune_credits_prepaid = ($user->fine_tune_credits_prepaid + $plan->fine_tune_credits_prepaid);
            $user->claude_3_opus_credits_prepaid = ($user->claude_3_opus_credits_prepaid + $plan->claude_3_opus_credits_prepaid);
            $user->claude_3_sonnet_credits_prepaid = ($user->claude_3_sonnet_credits_prepaid + $plan->claude_3_sonnet_credits_prepaid);
            $user->claude_3_haiku_credits_prepaid = ($user->claude_3_haiku_credits_prepaid + $plan->claude_3_haiku_credits_prepaid);
            $user->gemini_pro_credits_prepaid = ($user->gemini_pro_credits_prepaid + $plan->gemini_pro_credits_prepaid);
            $user->available_dalle_images_prepaid = $user->available_dalle_images_prepaid + $plan->dalle_images;
            $user->available_sd_images_prepaid = $user->available_sd_images_prepaid + $plan->sd_images;
            $user->available_chars_prepaid = $user->available_chars_prepaid + $plan->characters;
            $user->available_minutes_prepaid = $user->available_minutes_prepaid + $plan->minutes;
        }

        $user->save();
    }


    /**
	*
	* Register monthly yearly subscriber
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public static function registerRecurringSubscriber(SubscriptionPlan $id, $gateway, $status, $order)
    {
        $duration = ($id->payment_frequency == 'monthly') ? 30 : 365;

        $subscription = Subscriber::create([
            'active_until' => Carbon::now()->addDays($duration),
            'user_id' => auth()->user()->id,
            'plan_id' => $id->id,
            'status' => $status,
            'created_at' => now(),
            'gateway' => $gateway,
            'frequency' => $id->payment_frequency,
            'plan_name' => $id->plan_name,
            'gpt_3_turbo_credits' => $id->gpt_3_turbo_credits,
            'gpt_4_turbo_credits' => $id->gpt_4_turbo_credits,
            'gpt_4_credits' => $id->gpt_4_credits,
            'claude_3_opus_credits' => $id->claude_3_opus_credits,
            'claude_3_sonnet_credits' => $id->claude_3_sonnet_credits,
            'claude_3_haiku_credits' => $id->claude_3_haiku_credits,
            'gemini_pro_credits' => $id->gemini_pro_credits,
            'fine_tune_credits' => $id->fine_tune_credits,
            'dalle_images' => $id->dalle_images,
            'sd_images' => $id->sd_images,
            'characters' => $id->characters,
            'minutes' => $id->minutes,
            'subscription_id' => $order,
        ]);  
    }


    /**
	*
	* Register montly/yearly payments
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public static function registerRecurringPayment(SubscriptionPlan $id, $orderID, $gateway, $status, User $user = null)
    {
        $tax_value = (config('payment.payment_tax') > 0) ? $tax = $id->price * config('payment.payment_tax') / 100 : 0;
        $total_value = $tax_value + $id->price;

        $record_payment = new Payment();
        $record_payment->user_id = ($gateway == 'BankTransfer') ? auth()->user()->id : $user->id;
        $record_payment->plan_id = $id->id;
        $record_payment->order_id = $orderID;
        $record_payment->plan_name = $id->plan_name;
        $record_payment->frequency = $id->payment_frequency;
        $record_payment->price = $total_value;
        $record_payment->currency = $id->currency;
        $record_payment->gateway = $gateway;
        $record_payment->status = $status;
        $record_payment->gpt_3_turbo_credits = $id->gpt_3_turbo_credits;
        $record_payment->gpt_4_turbo_credits = $id->gpt_4_turbo_credits;
        $record_payment->gpt_4_credits = $id->gpt_4_credits;
        $record_payment->claude_3_opus_credits = $id->claude_3_opus_credits;
        $record_payment->claude_3_sonnet_credits = $id->claude_3_sonnet_credits;
        $record_payment->claude_3_haiku_credits = $id->claude_3_haiku_credits;
        $record_payment->gemini_pro_credits = $id->gemini_pro_credits;
        $record_payment->fine_tune_credits = $id->fine_tune_credits;
        $record_payment->dalle_images = $id->dalle_images;
        $record_payment->sd_images = $id->sd_images;
        $record_payment->characters = $id->characters;
        $record_payment->minutes = $id->minutes;
        $record_payment->save();  

        return $record_payment;
    }


     /**
	*
	* Assign monthly and yearly credits
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public static function registerRecurringCredits(User $user, $type, $id)
    {
        if ($type == 'prepaid') {
            $plan = PrepaidPlan::where('id', $id)->first();
        } else {
            $plan = SubscriptionPlan::where('id', $id)->first();
        }

        if ($type == 'prepaid') {
            $user->gpt_3_turbo_credits_prepaid = ($user->gpt_3_turbo_credits_prepaid + $plan->gpt_3_turbo_credits_prepaid);
            $user->gpt_4_turbo_credits_prepaid = ($user->gpt_4_turbo_credits_prepaid + $plan->gpt_4_turbo_credits_prepaid);
            $user->gpt_4_credits_prepaid = ($user->gpt_4_credits_prepaid + $plan->gpt_4_credits_prepaid);
            $user->fine_tune_credits_prepaid = ($user->fine_tune_credits_prepaid + $plan->fine_tune_credits_prepaid);
            $user->claude_3_opus_credits_prepaid = ($user->claude_3_opus_credits_prepaid + $plan->claude_3_opus_credits_prepaid);
            $user->claude_3_sonnet_credits_prepaid = ($user->claude_3_sonnet_credits_prepaid + $plan->claude_3_sonnet_credits_prepaid);
            $user->claude_3_haiku_credits_prepaid = ($user->claude_3_haiku_credits_prepaid + $plan->claude_3_haiku_credits_prepaid);
            $user->gemini_pro_credits_prepaid = ($user->gemini_pro_credits_prepaid + $plan->gemini_pro_credits_prepaid);
            $user->available_dalle_images_prepaid = $user->available_dalle_images_prepaid + $plan->dalle_images;
            $user->available_sd_images_prepaid = $user->available_sd_images_prepaid + $plan->sd_images;
            $user->available_chars_prepaid = $user->available_chars_prepaid + $plan->characters;
            $user->available_minutes_prepaid = $user->available_minutes_prepaid + $plan->minutes;
        } else {        
            $group = ($user->hasRole('admin')) ? 'admin' : 'subscriber';
            $user->syncRoles($group);   
            $user->group = $group;
            $user->plan_id = $plan->id;
            $user->gpt_3_turbo_credits = $plan->gpt_3_turbo_credits;
            $user->gpt_4_turbo_credits = $plan->gpt_4_turbo_credits;
            $user->gpt_4_credits = $plan->gpt_4_credits;
            $user->claude_3_opus_credits = $plan->claude_3_opus_credits;
            $user->claude_3_sonnet_credits = $plan->claude_3_sonnet_credits;
            $user->claude_3_haiku_credits = $plan->claude_3_haiku_credits;
            $user->fine_tune_credits = $plan->fine_tune_credits;
            $user->gemini_pro_credits = $plan->gemini_pro_credits;
            $user->available_chars = $plan->characters;
            $user->available_minutes = $plan->minutes;
            $user->member_limit = $plan->team_members;
            $user->available_dalle_images = $plan->dalle_images;
            $user->available_sd_images = $plan->sd_images;
        }

        $user->save();
    }
}