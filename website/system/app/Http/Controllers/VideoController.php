<?php

namespace App\Http\Controllers;
use App\video;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return video[]|Collection|Response
     */
    public function index()
    {
        $videos = video::all();
        return view('user.backend.photo.video.video',compact(['videos'])) ;
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
            'video_title'    =>  'required',
            'video'   =>  'required'
        ]);
        video::create($request->all());
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param video $video
     * @return void
     */
    public function show(video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param video $video
     * @return video
     */
    public function edit(video $video)
    {
        $videos = video::all();
        return view('user.backend.photo.video.videoedit',compact(['videos'])) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param video $video
     * @return RedirectResponse
     */
    public function update(Request $request, video $video)
    {
        $request->validate([
            'video_title'    =>  'required',
            'video'   =>  'required'
        ]);
       $video->update($request->all());
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param video $video
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(video $video)
    {
        $path = 'storage/assets/video/';
        $ext_file = $path.$video->video;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $video->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
