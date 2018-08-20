<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categorys')->insert([
            [
	            'category_title' => "HR",
	            'category_description' => "Human Resource",
	            'status' => 'active',
	            'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
        	],
        	[
	            'category_title' => "Finance",
	            'category_description' => "Finance",
	            'status' => 'inactive',
	            'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
        	]
        ]);
    }
}
