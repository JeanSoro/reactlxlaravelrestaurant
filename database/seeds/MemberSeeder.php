<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'anthony',
            'lname' => 'cook',
            'email' => 'cook@yahoo.ca',
            'phone_number'=>'6134569988',
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('members')->insert([
            'fname' => 'kelly',
            'lname' => 'rowland',
            'email' => 'kelly@aol.com',
            'phone_number'=>'6472221202',
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);
    }
}
