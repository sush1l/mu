<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\dastabej;
class karyabidhi extends Controller
{
    public function karyabidhi(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $dastabej = dastabej::get();
        
       return view('karyabidhi', compact(['header','link','dastabej']));
   
      }
}
