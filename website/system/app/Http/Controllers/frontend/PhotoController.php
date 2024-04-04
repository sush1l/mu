<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\photo;
use App\photo_album;
class PhotoController extends Controller
{
    public function PhotoController(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $photo_album = photo_album::get();
        $photos = photo::get();
       return view('photo', compact(['header','link','photo_album','photos']));
   
      }
}
