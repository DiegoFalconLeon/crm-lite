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
            'name' => 'Corporación de Abogados Cridez SAC',
            'document' => '12345678901',
            'address' => 'Urbanización Los Jazmines Mz. A Lt. 1 - San Juan de Lurigancho',
            'image' => 'default.png',
            'created_at' => now(),
        ]);
    }
}
