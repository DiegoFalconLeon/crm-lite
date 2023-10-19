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
        'area_id'=>'4',
        'user_id'=>'1',
        'description'=>'Solicita elaboracion de una Declaracion Juarada de no adeudo',
        'amount'=> 120.00,
        'status'=>'2',
        'created_at'=>now(),
      ]);
      DB::table('customers_users')->insert([
        'id' => 2,
        'customer_id'=>'2',
        'area_id'=>'3',
        'user_id'=>'2',
        'description'=>'Solicita escrito a la fiscalia para la liberacion de un vehiculo',
        'amount'=> 80.00,
        'status'=>'1',
        'created_at'=>now(),
      ]);
      DB::table('customers_users')->insert([
        'id' => 3,
        'customer_id'=>'3',
        'area_id'=>'4',
        'user_id'=>'3',
        'description'=>'Indemnisacion por daños y perjuicios',
        'amount'=> 550.00,
        'status'=>'2',
        'created_at'=>now(),
      ]);
      DB::table('customers_users')->insert([
        'id' => 4,
        'customer_id'=>'1',
        'area_id'=>'5',
        'user_id'=>'1',
        'description'=>'Despido injustificado',
        'amount'=> 1250.00,
        'status'=>'0',
        'created_at'=>now(),
      ]);
      DB::table('customers_users')->insert([
        'id' => 5,
        'customer_id'=>'3',
        'area_id'=>'4',
        'user_id'=>'5',
        'description'=>'Denuncia de alimentos',
        'amount'=> 899.90,
        'status'=>'1',
        'created_at'=>now(),
      ]);
    }
}
