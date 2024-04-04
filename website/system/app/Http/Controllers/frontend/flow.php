<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\publication;
class flow extends Controller
{
    public function flow(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $publication = publication::get();
        
       return view('flow', compact(['header','link','publication']));
   
      }
}
