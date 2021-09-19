<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function index() {
        $data = Pokemon::all();
        return view('index', compact('data'));
    }
}
