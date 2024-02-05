<?php

namespace App\Exports;

use App\Models\City_scale;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
class Exportscales implements FromArray, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
        public function array(): array
    {
        return []; // Empty array to represent no data
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'region',
            'level',
            'low',
            'medium',
            'high'
        ];
    }
}
