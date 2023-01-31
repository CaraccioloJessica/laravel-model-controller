<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movies;

class MainController extends Controller
{
  public function movies()
  {
    return view('movies');
  }
}