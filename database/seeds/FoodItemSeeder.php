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
            'title' => 'Mtl Burger',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/hamburger-and-fries.png',
            'price'=> 9.99,
            'category_id'=> 2,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Smoked Burger',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/hamburger-and-fries.png',
            'price'=> 12.99,
            'category_id'=> 2,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'House Burger',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/hamburger-and-fries.png',
            'price'=> 25.99,
            'category_id'=> 2,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 25.99,
            'category_id'=> 1,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Shrimp Tampura',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 10.99,
            'category_id'=> 3,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Chicken Tampura',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/pork-entrees-steak-pork.png',
            'price'=> 10.99,
            'category_id'=> 3,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Caesar Salad',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 12.99,
            'category_id'=> 4,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Tres Leche Cupcakes',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 4.99,
            'category_id'=> 5,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Coke',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 2.99,
            'category_id'=> 6,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sprite',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 2.99,
            'category_id'=> 6,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Greygoose Cocktail',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 7.99,
            'category_id'=> 6,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Hennesy Blend',
            'description' => 'Black Angus Beef Patty, Two Slices of American Cheese,Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url'=> 'img/salad.png',
            'price'=> 8.99,
            'category_id'=> 6,
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        
    }
}
