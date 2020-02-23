<?php

namespace App\Imports;

use App\tracking;
use Illuminate\Support\Facades\Hash;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new tracking([
            'blnumber'  => $row['bl_no'],
            'container' => $row['container_no'],
            'consignee' => $row['consignee'],
            'port'      => $row['loading_port'],
            'discharge' => $row['discharge'],
        ]);
    }
}
