<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\notice;
use App\publication;
use App\dastabej;
use App\download;
use App\photo_album;
use App\employee;
use App\link;
use App\header;
use DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $q= $request->search_word;
        $header = header::find(1);
        
        $link = link::limit(5)->get();
        $notices = notice::where('status','=',0)
            ->where(function ($query) use ($q) {
            $query->where('notice_name', 'LIKE' , '%'.$q.'%')
                  ->orWhere('notice_file', 'LIKE', '%'.$q.'%')
                ->orWhere('notice_publisher', 'LIKE', '%'.$q.'%')
                ->orWhere('notice_description', 'LIKE', '%'.$q.'%');
        })->get();
        $publications = publication::where('status','=',0)
            ->where(function ($query) use ($q) {
            $query->where('publication_file', 'LIKE' , '%'.$q.'%')
                  ->orWhere('publication_name', 'LIKE', '%'.$q.'%')
                ->orWhere('publication_date', 'LIKE', '%'.$q.'%');
        })->get();
        $dastabejs = dastabej::where('dastabej_title', 'LIKE' , '%'.$q.'%')
                  ->orWhere('file', 'LIKE', '%'.$q.'%')
                ->orWhere('dastabej_date', 'LIKE', '%'.$q.'%')
                ->get();
                
        $downloads = download::where('download_title', 'LIKE' , '%'.$q.'%')
                  ->orWhere('file', 'LIKE', '%'.$q.'%')
                ->orWhere('download_date', 'LIKE', '%'.$q.'%')
                ->get();
                
                
        $photos = photo_album::where('album_name', 'LIKE' , '%'.$q.'%')
                  ->orWhere('cover_photo', 'LIKE', '%'.$q.'%')
                ->get();
                     
        $employees = $users = DB::table('employees')
                    ->join('designations', 'designations.id', '=', 'employees.designation_id')
                    ->join('departments', 'departments.id', '=', 'employees.department_id')
                    ->where('status','=',0)
                    ->where(function($query) use ($q){
                       $query->where('name', 'LIKE' , '%'.$q.'%')
                    ->orWhere('photo', 'LIKE', '%'.$q.'%')
                    ->orWhere('level', 'LIKE', '%'.$q.'%')
                    ->orWhere('phone', 'LIKE', '%'.$q.'%')
                    ->orWhere('email', 'LIKE', '%'.$q.'%')
                    ->orWhere('address', 'LIKE', '%'.$q.'%')
                    ->orWhere('designation_name', 'LIKE', '%'.$q.'%')
                    ->orWhere('department_name', 'LIKE', '%'.$q.'%'); 
                    })
                    ->get();
         $links = link::where('link_name', 'LIKE' , '%'.$q.'%')
                  ->orWhere('url', 'LIKE', '%'.$q.'%')
                ->get();
        
        
        return view('search.search_res', compact(['notices','publications','dastabejs','downloads','photos','employees','links','header', 'q', 'link']));
    }
}
