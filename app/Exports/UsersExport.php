<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromArray, WithHeadings
{
    /**
     * @return array
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
            'desertalw',
            'low',
            'medium',
            'high'
        ];
    }
}
