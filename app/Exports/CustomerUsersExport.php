<?php

namespace App\Exports;

use App\Models\CustomersUsers;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomerUsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CustomersUsers::all();
    }
}
