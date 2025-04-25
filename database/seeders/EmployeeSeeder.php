<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        // for ($i = 0; $i < 20000; $i++) {
        //     Employee::create([
        //         'name'        => fake()->name(),
        //         'country_id'  => rand(1, 240),
        //         'company_id'  => rand(1, 1000),
        //         'position_id' => rand(1, 3),
        //     ]);
        // }

        // Employee::factory(20000)->create();

        $employees = Employee::factory(20000)->make();

        $employees->chunk(500)->each(function ($chunk) {
            Employee::insert($chunk->toArray());
        });

        DB::statement("update employees set created_at = now(), updated_at = now()");
    }
}
