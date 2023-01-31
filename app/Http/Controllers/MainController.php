<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movies;

class MainController extends Controller
{
  public function movies()
  {
    $movies = Movies::all();

    $data = [

      'movies' => $movies
    ];

    return view('movies', $data);
  }
}