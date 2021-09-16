<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Imports\InstitutionImport;
use App\Imports\AvailableInstitutionImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use Validator;
use Auth;

class InstitutionsController extends Controller
{
    
    public function showInstitutionDataStoreForm(){
        return view('admin.institutions_data_store');
    }
    
    public function import(){
        Excel::import(new InstitutionImport, request()->file('file'));
        return back();
    }
    
    //Excel/CSVの登録（available_institutionsテーブルへ）
    public function importAvailable(){
        Excel::import(new AvailableInstitutionImport, request()->file('file'));
        return back();
    }

}