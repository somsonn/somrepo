<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salary;

class Salaryy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Salary::create([
          'salary'=>10000,

        ]);
    }
}
