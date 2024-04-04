<?php

namespace App\Http\Controllers;

use App\Imports\pcrTestImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PcrImportController extends Controller
{
    public function bulkimport(){
        return view('pcr.bulkupload.import');
    }
    public function import(Request $request)
    {
        $file = $request->file('file')->store('assets/Csv/covid19/bulk_upload/daily_report');

        $pcr = new pcrTestImport();
        $pcr->import($file);
        if ($pcr->failures()->isNotEmpty()){
            return back()->withFailures($pcr->failures());
        }
        return back()->withStatus('Imported Successfully');
    }
}
