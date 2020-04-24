<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'fname' => 'jill',
            'lname' => 'scott',
            'email' => 'jill@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'fname' => 'billy',
            'lname' => 'smith',
            'email' => 'billy@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        
        foreach(range(1,20) as $index){
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'password'=> Hash::make('12345678'),
                'updated_at'=> $faker->dateTimeThisMonth('now', 'America/New_York'),
                'created_at'=> $faker->dateTimeThisMonth('now', 'America/New_York')
            ]);
        }
    
    }
}
