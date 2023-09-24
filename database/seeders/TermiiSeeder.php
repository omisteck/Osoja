<?php

namespace Database\Seeders;

use App\Models\BusinessSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermiiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $setting = new BusinessSetting();

       $setting->key = 'termii_sms';
       $setting->value = json_encode([
        'status' => 1,
        'api_key' => '',
        'channel' => 'generic',
        'from' => 'Osojapa',
       ]);

       $setting->save();
    }
   
}
