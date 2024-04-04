<?php

namespace App\Http\Controllers;

use App\Exports\covid19Export;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class Covid19ExportController extends Controller
{
    private $excel;
    public function __construct(Excel $excel){
        $this->excel = $excel;
    }
    protected function export()
    {
        return $this->excel->download(new covid19Export, 'Covid19.xlsx');
    }
}
