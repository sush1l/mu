<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\dastabej;
class ranniti extends Controller
{
    public function ranniti(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $dastabej = dastabej::get();
        
       return view('ranniti', compact(['header','link','dastabej']));
   
      }
}
