<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('customers')->insert([
        'id' => 1,
        'means_of_contact_id'=>3,
        'name'=>'Edgar',
        'lastname'=>'Vivar Sánchez',
        'document'=>'12345678',
        'email'=> 'edgar.vivar@mail.com',
        'phone'=>'987654322',
        'status'=>'A',
        'created_at'=>now(),
      ]);
      DB::table('customers')->insert([
        'id' => 2,
        'means_of_contact_id'=>4,
        'name'=>'Roberto',
        'lastname'=>'Gomez Bolaños',
        'document'=>'12345678',
        'email'=> 'roberto.gomez@mail.com',
        'phone'=>'987654323',
        'status'=>'A',
        'created_at'=>now(),
      ]);
      DB::table('customers')->insert([
        'id' => 3,
        'means_of_contact_id'=>1,
        'name'=>'Will',
        'lastname'=>'Smith ',
        'document'=>'12345678',
        'email'=> 'will.smith@mail.com',
        'phone'=>'987654324',
        'status'=>'A',
        'created_at'=>now(),
      ]);
    }
}
