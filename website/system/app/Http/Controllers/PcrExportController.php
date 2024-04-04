<?php

namespace App\Http\Controllers;

use App\Exports\pcrTestExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class PcrExportController extends Controller
{
    private $excel;
    public function __construct(Excel $excel){
        $this->excel = $excel;
    }
    protected function export()
    {
        return $this->excel->download(new pcrTestExport, 'PCRTest.xlsx');
    }
}
