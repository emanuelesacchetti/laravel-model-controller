<?php

namespace App\Http\Controllers\Guest;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){


        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function best(){
    
        $bestMovies = Movie::where('vote', '>', 9)->get();
        return view('best', compact('bestMovies'));
    }

    public function last(){
    
        $lastMovies = Movie::whereYear('date', '>', 1994)->get();
        return view('last', compact('lastMovies'));
    }

}
