<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderByDesc('id')->get();
        return view('video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Video::rules());
        $url = Storage::disk('videos')->put('video', $request->file('video'));
        $video = new Video();
        $video->name = $request->name;
        $video->description = $request->description;
        $video->url = $url;
        $video->save();

        return redirect()->route('video.index')->with('status','El video fue registrado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return view('video.show',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate(Video::rules(false));
        if ($request->has('video')) {
            //eliminar
            //Storage::delete($video->url);
            Storage::disk('public')->delete($video->url);
            $url = Storage::disk('public')->put('video', $request->file('video'));
            $video->url = $url;
        }
        $video->name = $request->name;
        $video->description = $request->description;
        $video->save();

        return redirect()->route('video.index')->with('status','El video fue actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //eliminacion fisica del video
        //Storage::delete($video->url);
        Storage::disk('videos')->delete($video->url);
        $video->delete();
        return redirect()->route('video.index')->with('status','El video fue eliminado con éxito.');
    }

}
