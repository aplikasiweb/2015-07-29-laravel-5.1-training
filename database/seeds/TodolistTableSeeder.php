<?php

use Illuminate\Database\Seeder;
use App\Todolist;

class TodolistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todolist::create([
        	'name' => 'Penang Vacation',
        	'description' => 'Things to do before leave'
    	]);

        Todolist::create([
        	'name' => 'KL Vacation',
        	'description' => 'Things to do before leave'
    	]);

        Todolist::create([
        	'name' => 'Mersing Vacation',
        	'description' => 'Things to do before leave'
    	]); 	
    }
}
