<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\ex_employee;
class exteam extends Controller
{
    public function exteam(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $ex_employee = ex_employee::get();
        
       return view('exteam', compact(['header','link','ex_employee']));
   
      }
}
