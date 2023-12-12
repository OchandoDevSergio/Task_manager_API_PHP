<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Para generar automáticamente con faker descomentar
        // Customer::factory()
        //   ->count(1)
        //   ->hasTasks(10)
        //   ->create();
        // Customer::factory()
        //   ->count(2)
        //   ->hasTasks(5)
        //   ->create();

        Customer::create([
          'id' => 1,
          'name' => 'Jose',
          'surnames' => 'García Serrano',
          'email' => 'jose@mail.com'
        ]);
        Customer::create([
          'id' => 2,
          'name' => 'Antonio',
          'surnames' => 'Muñoz Gil',
          'email' => 'antonio@mail.com'
        ]);

    }
}
