<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;

class linkcontroller extends Controller
{
    public function link(){
        $header = header::find(1);
        $link = link::get();
        
       return view('link', compact(['header','link']));
   
      }
}
