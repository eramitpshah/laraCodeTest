<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'name' => "Amit Shah",
            'email' => "er.amitpshah@gmail.com",
            'password' => Hash::make('Amit@123'),
            'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
        ]);
    }
}
