<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scale;

class scalee extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scale::create([
            'value'=>400,
            'status'=>1,

        ]);
    }
}
