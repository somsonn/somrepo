<?php

namespace App\Imports;

use App\Models\Zone_wereda;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportZone_wereda implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     public function model(array $row)
    {
        if ($row[0] === 'city_name') {
            return null; // Skip the header row
        }

        return new Zone_wereda([
            'name' => $row[0],
            'level' =>  $row[1], // Cast to integer
            'region' =>  $row[2],
            'desertalw' => (int) $row[3],
        ]);
    }
}
