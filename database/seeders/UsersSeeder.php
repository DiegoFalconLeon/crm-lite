<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('users')->insert([
        	'id' => 1,
          'user_area_id'=>1,
          'name'=>'Diego',
          'lastname'=>'Falcon Leon',
          'role'=>'A',
          'email'=>'admin@mail.com',
          'password'=>Hash::make('12345678'),
          'status'=>'A',
    	]);
      DB::table('users')->insert([
        'id' => 2,
        'user_area_id'=>2,
        'name'=>'Evans',
        'lastname'=>'Falcon Leon',
        'role'=>'U',
        'email'=>'user@mail.com',
        'password'=>Hash::make('12345678'),
        'status'=>'A',
    ]);
    }
}
