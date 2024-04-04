<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\dastabej;
class expenditure extends Controller
{
    public function expenditure(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $dastabej = dastabej::get();
        
       return view('expenditure', compact(['header','link','dastabej']));
   
      }
}
