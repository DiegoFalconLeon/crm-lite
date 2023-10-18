<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
            'name' => 'Mi tiendita SACC',
            'document' => '12345678901',
            'address' => 'Acá cerquita nomás',
            'phone' => '987654321',
            'email' => 'mitiendita@mail.com',
            'website' => 'www.mitiendita.com',
            'image' => 'default.png',
            'created_at' => now(),
        ]);
    }
}
