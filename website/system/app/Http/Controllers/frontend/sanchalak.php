<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\samiti;
class sanchalak extends Controller
{
    public function sanchalak(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $samiti = samiti::get();
        
       return view('sanchalak', compact(['header','link','samiti']));
   
      }
}
