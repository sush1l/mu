<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\office_detail;
class institution extends Controller
{
    public function institution(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $office_Detail = office_detail::get();
        
       return view('institution', compact(['header','link','office_Detail']));
   
      }
}
