<?php

namespace App\Http\Controllers;
use App\photo;
use App\photo_album;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PhotoAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return photo_album[]|Collection
     */
    public function index()
    {
        $photo_album = photo_album::all();
        $photos = photo::all();
         return view('user.backend.photo.album.album',compact(['photo_album','photos'])) ;
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'album_name'    =>  'required',
            'cover_photo'   =>  'nullable | mimes:jpg,jpeg,png'
        ]);
        $store  =   new photo_album;
        $store->album_name  =   $request->album_name;
        if ($request->hasFile('cover_photo')) {
           $ext = $request->FILE('cover_photo')->getClientOriginalExtension();
            $FileNameToStore = 'Cover_Photo'.time().'.'.$ext;
            $request->file('cover_photo')->storeAs('public/assets/photo',$FileNameToStore);
            $store->cover_photo =  $FileNameToStore;
        }
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param photo_album $photo_album
     * @return void
     */
    public function show(photo_album $photo_album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param photo_album $photo_album
     * @return photo_album
     */
    public function edit(photo_album $photo_album)
    {
        return view('user.backend.photo.update.album_update',compact(['photo_album']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param photo_album $photo_album
     * @return RedirectResponse
     */
    public function update(Request $request, photo_album $photo_album)
    {
        $request->validate([
            'album_name'    =>  'required',
            'cover_photo'   =>  'nullable | mimes:jpg,jpeg,png'
        ]);
        $path = 'storage/assets/photo/';
        $photo_album->album_name  =   $request->album_name;
        if ($request->hasFile('cover_photo')) {
            $ext_file = $path.$photo_album->cover_photo;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('cover_photo')->getClientOriginalExtension();
            $FileNameToStore = 'Cover_Photo'.time().'.'.$ext;
            $request->file('cover_photo')->storeAs('public/assets/photo',$FileNameToStore);
            $photo_album->cover_photo =  $FileNameToStore;
        }
        $photo_album->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param photo_album $photo_album
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(photo_album $photo_album)
    {
        $path = 'storage/assets/photo/';
        $ext_file = $path.$photo_album->cover_photo;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $photo_album->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
