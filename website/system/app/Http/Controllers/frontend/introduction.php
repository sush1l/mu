<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\office_detail;

class introduction extends Controller
{
   public function introduction(){
      $header = header::find(1);
      $link = link::limit(5)->get();
      $office_Detail = office_detail::get();
      
     return view('introduction', compact(['header','office_Detail','link']));
 
    }
}
