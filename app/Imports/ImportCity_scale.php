<?php

namespace App\Imports;

use App\Models\City_scale;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCity_scale implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     public function model(array $row)
    {
        if ($row[0] === 'region') {
            return null; // Skip the header row
        }

        return new City_scale([
            'region' => $row[0],
            'level' => (int) $row[1], // Cast to integer
            'low' => (int) $row[2],
            'medium' => (int) $row[3],
            'high' => (int) $row[4],
        ]);
    }
}
