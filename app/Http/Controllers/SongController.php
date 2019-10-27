<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::take(3)->latest()->get();
        return view('song.index', ['title' => "Michelle's Songs", 'songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('song.create', ['title' => 'Create New Song']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Song::create($this->validateRequest($request));
        $songs = Song::take(3)->latest()->get();
        return view('song.index', ['title' => "Michelle's Songs", 'songs' => $songs]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('song.show', ['title' => "Michelle's Song $song->title", 'song' => $song]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('song.edit', ['title' => "Edit Michelle's Song $song->title", 'song' => $song]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $song->update($this->validateRequest($request));
        return view('song.show', ['title' => "Michelle's Song $song->title", 'song' => $song]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        $songs = Song::take(3)->latest()->get();
        return view('song.index', ['title' => "Michelle's Songs", 'songs' => $songs]);
    }

    public function validateRequest(Request $request)
    {
        return $request->validate([
           'title' => 'required|min:5|max:255',
           'thumbnail_url' => 'required',
           'youtube_url' => 'required|url',
           'youtube_embed_url' => 'required|url',
           'short_description' => 'required|max:255',
           'description' => 'required'
        ]);
    }
}
