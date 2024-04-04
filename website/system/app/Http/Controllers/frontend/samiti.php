<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\samiti;
class samiti extends Controller
{
    public function samiti(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $samiti = samiti::get();
        
       return view('samiti', compact(['header','link','samiti']));
   
      }
}
