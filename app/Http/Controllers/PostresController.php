<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostresController extends Controller
{
    public function index() {

        return view('articulo'); 

    }
}
