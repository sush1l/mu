<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\dastabej;
class procurement extends Controller
{
    public function procurement(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $dastabej = dastabej::get();
        
       return view('procurement', compact(['header','link','dastabej']));
   
      }
}
