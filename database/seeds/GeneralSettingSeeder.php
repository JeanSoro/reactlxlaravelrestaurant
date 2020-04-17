<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Mdrn Bites',
            'logo_image_url' => '/img/restaurantLogo.png',
            'address_1'=> '100 Elvis Presley Blvd',
            'address_2'=> '',
            'city'=> 'Montreal',
            'province'=> 'QC',
            'postal_code'=> 'h4b1u9',
            'phone_number'=> '345-6781-121',
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);
    }
}
