<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\video;
use App\photo;
use App\photo_album;
class video extends Controller
{
    public function video(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $photo_album = photo_album::get();
        $photos = photo::get();
        $videos = video::get();
       return view('video', compact(['header','link','photo_album','photos','videos']));
   
   }
}
