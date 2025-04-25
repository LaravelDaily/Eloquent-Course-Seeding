<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        Position::create(['name' => 'Manager']);
        Position::create(['name' => 'CEO']);
        Position::create(['name' => 'Employee']);
    }
}
