<?php

namespace App\Imports;

use App\Models\Capital_city;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
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

        return new Capital_city([
            'city_name' => $row[0],
            'desertalw' => (int) $row[1], // Cast to integer
            'low' => (int) $row[2],
            'medium' => (int) $row[3],
            'high' => (int) $row[4],
        ]);
    }
}
