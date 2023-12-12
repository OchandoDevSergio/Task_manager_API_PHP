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
        //
        Customer::factory()
          ->count(1)
          ->hasTasks(10)
          ->create();
        Customer::factory()
          ->count(2)
          ->hasTasks(5)
          ->create();
    }
}
