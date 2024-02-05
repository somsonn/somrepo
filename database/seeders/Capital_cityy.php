<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Capital_city;


class Capital_cityy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Capital_city::create([
            'city_name'=>'ደብረ ብርሃን',
            'desertalw'=>1,
            'low'=>490,
            'medium'=>500,
            'high'=>100,
            'status'=>0,
        ]);
    }
}
