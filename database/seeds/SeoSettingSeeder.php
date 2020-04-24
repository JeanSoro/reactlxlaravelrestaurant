<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => 'Mdrn Bites was established in 2019 and is the hot new spot for all crowds, young and hip or mature, you are guaranteed to be in for a treat with our resident djs from around the country spinning top tracks all day and all nights. Sit back and enjoy this experience!',
            'keywords' => 'Salads, Best Restaurant In Town, Burgers, Local Burger, Local Pizzas, Local Hamburgers, Drinks, Food, Music, Live Music, Late Night, Brunch',
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);
    }
}
