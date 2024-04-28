<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Email;

class EmailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendors = [           
            ['id' => 10, 'name' => 'Manual User Addition', 'subject' => 'You have been added to DaVinci AI', 'message' => '<div>Hi there,</div><div><br></div><div>You have been added to DaVinci AI platform.</div><div><br></div><div>Your account is already activated, please use following email and password to login at www.davinci.com</div>', 'footer' => '<div><div>With regards,</div><div><span style="font-weight: bolder;">DaVinci AI Team</span></div></div>', 'type' => 'system'],
            ['id' => 11, 'name' => 'Manual Credit Assignment', 'subject' => 'You have new credits added at DaVinci AI', 'message' => '<div>You have new AI credits assigned to your account.&nbsp;</div><div><br></div><div>Your current credit balance is:&nbsp;</div>', 'footer' => '<div><div>With regards,</div><div><span style="font-weight: bolder;">DaVinci AI Team</span></div></div>', 'type' => 'system'],
        ];

        foreach ($vendors as $vendor) {
            Email::updateOrCreate(['id' => $vendor['id']], $vendor);
        }
    }
}
