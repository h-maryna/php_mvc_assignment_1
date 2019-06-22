<?php


namespace App\Http\Controllers\Birds;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use\App\Bird;


class BirdsController extends Controller
{
    public function index(){
       $birds = Bird::all();  
        return view('bird.birds', compact('birds'));

    }

    public function show($id)
    {
        $birds = Bird::where('id', $id)->first();
        return view('bird.birds_detail', compact('birds'));
    } 
}
