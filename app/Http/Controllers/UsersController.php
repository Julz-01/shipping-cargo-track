<?php

namespace App\Http\Controllers;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers;

class UsersController extends Controller
{
    public function import(){

        $this-> validate(request(),
       [
       	'your_file' => 'required|mimes:xls,xlsx'
    	]);
    	Excel::import(new UsersImport, request()->file('your_file'));
    	
    	return back()->with('success');
    }
}