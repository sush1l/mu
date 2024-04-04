<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\office_detail;
class c_charter extends Controller
{
    public function c_charter(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $office_detail = office_detail::get();
        
       return view('c_charter', compact(['header','link','office_detail']));
   
      }
}
