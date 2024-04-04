<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\employee;
class team extends Controller
{
    public function team(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $employee = employee::get();
        
       return view('team', compact(['header','link','employee']));
   
      }
}
