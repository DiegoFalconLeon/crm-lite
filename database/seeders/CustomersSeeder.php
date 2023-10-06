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
        //'area_id'=>1,
        'means_of_contact_id'=>3,
        'name'=>'Juan',
        'lastname'=>'Perez',
        'document'=>'12345678',
        'email'=> 'juan@mail.com',
        'phone'=>'987654321',
        'status'=>'A',
        'created_at'=>now(),
      ]);
    }
}
