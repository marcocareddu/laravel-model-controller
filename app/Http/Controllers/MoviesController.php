<?php

namespace App\Http\Controrequestllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
}
