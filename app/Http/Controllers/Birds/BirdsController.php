<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use\App\Bird;


class BirdsController extends Controller
{
    public function index(){
        $bird = bird::where('name', 'pengin')->first();
        
        return view('birds.default', compact('bird'));

    }

    public function show(bird $bird)
    {
        //$bird = bird::where('slug', $slug)->first();
        return view('birds.default', compact('bird'));
    }
}
