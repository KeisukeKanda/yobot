<?php

namespace App\Imports;

use App\Available_Institution;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AvailableInstitutionImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Available_Institution([
            //
            'id'=>$row['id'],
            'user_address'=>$row['user_address'],
            'institution_address'=>$row['institution_address'],
        ]);
    }
}
