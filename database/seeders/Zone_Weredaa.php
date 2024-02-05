<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zone_wereda;

class Zone_Weredaa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Zone_wereda::create([
            'name'=>'ኮምቦልቻ',
            'level'=>'ዞን',
            'region'=>'አማራ',
            'desertalw'=>0,
             'status'=>1,
        ]);
    }
}
