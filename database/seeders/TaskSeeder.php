<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Task::create([
            'id' => 1,
            'customer_id' => 1,
            'status' => 'por hacer',
            'description' => 'estudiar'
        ]);
        Task::create([
            'id' => 2,
            'customer_id' => 1,
            'status' => 'por hacer',
            'description' => 'ir al gimnasio'
        ]);
        Task::create([
            'id' => 3,
            'customer_id' => 1,
            'status' => 'hecho',
            'description' => 'hacer la compra'
        ]);
        Task::create([
            'id' => 4,
            'customer_id' => 1,
            'status' => 'por hacer',
            'description' => 'visitar familiares'
        ]);
        Task::create([
            'id' => 5,
            'customer_id' => 1,
            'status' => 'por hacer',
            'description' => 'cortarme el pelo'
        ]);
        Task::create([
            'id' => 6,
            'customer_id' => 2,
            'status' => 'hecho',
            'description' => 'trabajar'
        ]);
        Task::create([
            'id' => 7,
            'customer_id' => 2,
            'status' => 'hecho',
            'description' => 'ir al gimnasio'
        ]);
        Task::create([
            'id' => 8,
            'customer_id' => 2,
            'status' => 'por hacer',
            'description' => 'asistir a cena de empresa'
        ]);
        Task::create([
            'id' => 9,
            'customer_id' => 2,
            'status' => 'por hacer',
            'description' => 'comprar reglo'
        ]);
    }
}
