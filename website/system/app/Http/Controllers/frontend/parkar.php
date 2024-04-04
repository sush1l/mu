<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\office_detail;
class wadapatra extends Controller
{
    public function wadapatra(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $office_Detail = office_detail::get();
        
       return view('wadapatra', compact(['header','link','office_Detail']));
   
      }
}
