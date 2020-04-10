<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    
    }
}
