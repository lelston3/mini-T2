<?php

namespace App\Exports;

use App\Models\Famille;
use Maatwebsite\Excel\Concerns\FromCollection;

class FamilleExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Famille::all();
    }
}
