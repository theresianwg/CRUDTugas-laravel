<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Toko;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Toko::create([
            'IdBarang' => 'FW001',
            'NamaBarang' => 'Sabun Cuci Muka',
            'Merk' => 'Wardah',
            'JumlahStock' => '25'
        ]);
    }
}
