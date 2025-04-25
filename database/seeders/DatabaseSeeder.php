<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            CompanySeeder::class,
            PositionSeeder::class,
            EmployeeSeeder::class,
        ]);
    }
}
