<?php

namespace App\Imports;

use App\Institution;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InstitutionImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Institution([
            //
            'name'=>$row['name'],
            'zipcode'=>$row['zipcode'],
            'address'=>$row['address'],
            'address1'=>$row['address1'],
            'address2'=>$row['address2'],
            'address3'=>$row['address3'],
            'address4'=>$row['address4'],
            'tel'=>$row['tel'],
            'institution_img'=>$row['institution_img'],
            'health_check'=>$row['health_check'],
            'gc_barium'=>$row['gc_barium'],
            'gc_endoscopy'=>$row['gc_endoscopy'],
            'lung_cancer'=>$row['lung_cancer'],
            'colon_cancer'=>$row['colon_cancer'],
            'mammography'=>$row['mammography'],
            'cervical_cancer'=>$row['cervical_cancer'],
            'prostate_cancer'=>$row['prostate_cancer'],
            'bone'=>$row['bone'],
            'hepatitis'=>$row['hepatitis'],
            'vaccination'=>$row['vaccination'],
            'smoking_counsel'=>$row['smoking_counsel']
        ]);
    }
}
