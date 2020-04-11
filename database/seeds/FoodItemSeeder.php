<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Mtl burger',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 9.99,
            'category_id'=> 2,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Smoked burger',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 12.99,
            'category_id'=> 2,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'House burger',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 25.99,
            'category_id'=> 2,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);
    }
}
