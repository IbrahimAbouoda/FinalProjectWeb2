<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('frontEnd.index',[
            'post'=>\App\Models\post::all()
        ]);
    }
}
