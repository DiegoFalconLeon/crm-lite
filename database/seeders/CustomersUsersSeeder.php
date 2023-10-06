<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('customers_users')->insert([
        'id' => 1,
        'customer_id'=>'1',
        'area_id'=>'2',
        'user_id'=>'1',
        'description'=>'Solicita elaboracion de una Declaracion Juarada de no adeudo',
        'amount'=> 120.00,
        'status'=>'2',
        'created_at'=>now(),
      ]);
      DB::table('customers_users')->insert([
        'id' => 2,
        'customer_id'=>'1',
        'area_id'=>'3',
        'user_id'=>'2',
        'description'=>'Solicita escrito a la fiscalia para la liberacion de un vehiculo',
        'amount'=> 80.00,
        'status'=>'1',
        'created_at'=>now(),
      ]);
      DB::table('customers_users')->insert([
        'id' => 3,
        'customer_id'=>'1',
        'area_id'=>'2',
        'user_id'=>'2',
        'description'=>'Solicita carta poder para la venta de un vehiculo',
        'amount'=> 250.00,
        'status'=>'0',
        'created_at'=>now(),
      ]);
    }
}
