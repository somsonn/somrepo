<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City_scale;

class City_scalee extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City_scale::create([
            'region'=>'አማራ',
            'level'=>'ክልል',
            'low'=>4999,
            'medium'=>9999,
             'high'=>10000,
        ]);
    }
}
