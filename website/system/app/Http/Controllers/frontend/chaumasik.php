<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\publication;
class chaumasik extends Controller
{
    public function chaumasik(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $publication = publication::get();
        
       return view('chaumasik', compact(['header','link','publication']));
   
      }
}
