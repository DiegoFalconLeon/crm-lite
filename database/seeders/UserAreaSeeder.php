<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_area')->insert([
        	'id' => 1,
        	'name'=>'Sin Area',
    	]);
        DB::table('user_area')->insert([
        	'id' => 2,
        	'name'=>'Area Civil',
    	]);
        DB::table('user_area')->insert([
        	'id' => 3,
        	'name'=>'Area Penal',
    	]);
        DB::table('user_area')->insert([
        	'id' => 4,
        	'name'=>'Area Tributaria',
    	]);
        DB::table('user_area')->insert([
        	'id' => 5,
        	'name'=>'Area Laboral',
    	]);
        DB::table('user_area')->insert([
        	'id' => 6,
        	'name'=>'Area Familia',
    	]);
    }
}
