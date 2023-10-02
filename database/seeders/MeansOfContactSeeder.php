<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeansOfContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('means_of_contact')->insert([
        	'id' => 1,
        	'name'=>'llamada directa',
        ]);
        DB::table('means_of_contact')->insert([
        	'id' => 2,
        	'name'=>'facebook',
        ]);
        DB::table('means_of_contact')->insert([
        	'id' => 3,
        	'name'=>'whatsapp',
        ]);
        DB::table('means_of_contact')->insert([
        	'id' => 4,
        	'name'=>'instragram',
        ]);
        DB::table('means_of_contact')->insert([
        	'id' => 5,
        	'name'=>'twitter',
        ]);
        DB::table('means_of_contact')->insert([
        	'id' => 6,
        	'name'=>'tik tok',
        ]);
        DB::table('means_of_contact')->insert([
        	'id' => 7,
        	'name'=>'recomendado por cliente',
        ]);
        DB::table('means_of_contact')->insert([
        	'id' => 8,
        	'name'=>'recomendado por trabajador',
        ]);
    }
}
