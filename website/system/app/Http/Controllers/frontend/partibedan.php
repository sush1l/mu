<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\publication;
class partibedan extends Controller
{
    public function partibedan(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $publication = publication::get();
        
       return view('partibedan', compact(['header','link','publication']));
   
      }
}
