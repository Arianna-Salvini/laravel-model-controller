<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movies;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){

      $movies = Movies::orderByDesc('id')->get();
      // dd($movies);
    return view('guests.welcome', compact('movies'));
   }
}
