<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\publication;
class masik extends Controller
{
    public function masik(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $publication = publication::get();
        
       return view('masik', compact(['header','link','publication']));
   
      }
}
