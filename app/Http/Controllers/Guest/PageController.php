<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // SELECT * FROM movies

        // $movies = Movie::where('nationality', 'american')->get(); // SELECT * FROM movies WHERE nationality = american

        // $movies = Movie::where('vote', '>=', 9)->get(); // SELECT * FROM movies WHERE vote >= 9

        // $movies = Movie::where('vote', '>=', 9)
        //                 ->where('nationality', 'american')
        //                 ->orderBy('title','desc')
        //                 ->limit(2)
        //                 ->get();
        // $movies = Movie::where('vote', '>=', 9)
        //                 ->where('nationality', 'american')
        //                 ->orderBy('title','desc')
        //                 ->first();

        return view('homepage', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('show', compact('movie'));
    }
}
