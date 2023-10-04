<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas')->insert([
        	'id' => 1,
        	'name'=>'Sin Area',
          'created_at'=>now(),
    	]);
        DB::table('areas')->insert([
        	'id' => 2,
        	'name'=>'Area Civil',
          'created_at'=>now(),
    	]);
        DB::table('areas')->insert([
        	'id' => 3,
        	'name'=>'areas Penal',
          'created_at'=>now(),
    	]);
        DB::table('areas')->insert([
        	'id' => 4,
        	'name'=>'Area Tributaria',
          'created_at'=>now(),
    	]);
        DB::table('areas')->insert([
        	'id' => 5,
        	'name'=>'Area Laboral',
          'created_at'=>now(),
    	]);
        DB::table('areas')->insert([
        	'id' => 6,
        	'name'=>'Area Familia',
          'created_at'=>now(),
    	]);
    }
}
