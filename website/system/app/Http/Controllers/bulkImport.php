<?php

namespace App\Http\Controllers;

use App\Imports\covid19Import;
use Illuminate\Http\Request;

class bulkImport extends Controller
{
    public function bulkimport(){
        return view('covid19.bulkupload.import');
    }
    public function import(Request $request)
    {
      $file = $request->file('file')->store('assets/Csv/covid19/bulk_upload/daily_report');

        $covid19 = new covid19Import;
        $covid19->import($file);
        if ($covid19->failures()->isNotEmpty()){
            return back()->withFailures($covid19->failures());
        }
      return back()->withStatus('Imported Successfully');
    }
}
