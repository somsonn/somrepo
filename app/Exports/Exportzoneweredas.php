<?php

namespace App\Exports;

use App\Models\Zone_wereda;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
class Exportzoneweredas implements FromArray, WithHeadings
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
            'city_name',
            'level',
            'region',
            'desert allowance',
        ];
    }
}
