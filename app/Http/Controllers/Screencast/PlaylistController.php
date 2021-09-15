<?php

namespace App\Http\Controllers\Screencast;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlaylistRequest;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    public function create()
    {
      return view('playlists.create');
    }

    public function store(PlaylistRequest $request)
    {
      $request->validate([
        
      ]);

      Auth::user()->playlists()->create([
        'name'=>$request->name,
        'thumbnail'=>$request->file('thumbnail')->store('images/playlist'),
        'slug'=>Str::slug($request->name . '-' . Str::random(6)),
        'price'=>$request->price,
        'description'=>$request->description,
      ]);

      return back();
    }

    public function table()
    {
        $playlists=Auth::user()->playlists()->latest()->paginate(10);
        return view('playlists.table',compact('playlists'));
    }
}
