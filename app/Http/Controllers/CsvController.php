<?php

namespace App\Http\Controllers;
use CSVImport;
use Illuminate\Http\Request;


class CsvController extends Controller
{
    
    public function index(){
        return view('upload');
    }
    public function upload(Request $request){
        $csvFile = $request->file('csv_file');

        $batch = CSVImport::import_csv($csvFile);

    return "uploaded successfull";
    }
}
