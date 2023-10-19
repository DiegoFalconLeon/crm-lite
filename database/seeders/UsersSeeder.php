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
      'area_id' => 2,
      'name' => 'Diego',
      'lastname' => 'Falcon Leon',
      'role' => 'A',
      'email' => 'admin@mail.com',
      'password' => Hash::make('12345678'),
      'image'=>'1.png',
      'status' => 'A',
      'created_at' => now(),
    ]);
    DB::table('users')->insert([
      'id' => 2,
      'area_id' => 3,
      'name' => 'Mayra Angélica',
      'lastname' => 'Cruz Lázaro',
      'role' => 'U',
      'email' => 'user@mail.com',
      'password' => Hash::make('12345678'),
      'image'=>'2.png',
      'status' => 'A',
      'created_at' => now(),
    ]);
    DB::table('users')->insert([
      'id' => 3,
      'area_id' => 3,
      'name' => 'Juan Carlos',
      'lastname' => 'Perez Perez',
      'role' => 'U',
      'email' => 'juan.perez@mail.com',
      'password' => Hash::make('12345678'),
      'image'=>'3.png',
      'status' => 'I',
      'created_at' => now(),
    ]);
    DB::table('users')->insert([
      'id' => 4,
      'area_id' => 4,
      'name' => 'Maria Guadalupe',
      'lastname' => 'Diaz Palomares',
      'role' => 'U',
      'email' => 'maria.diaz@mail.com',
      'password' => Hash::make('12345678'),
      'image'=>'4.png',
      'status' => 'A',
      'created_at' => now(),
    ]);
    DB::table('users')->insert([
      'id' => 5,
      'area_id' => 5,
      'name' => 'Francisco Javier',
      'lastname' => 'Melendez Lopez',
      'role' => 'U',
      'email' => 'francisco.melendez@mail.com',
      'password' => Hash::make('12345678'),
      'image'=>'5.png',
      'status' => 'A',
      'created_at' => now(),
    ]);
  }
}
