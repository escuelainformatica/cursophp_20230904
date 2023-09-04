<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function listar() {
        $actores=Actor::all(); // eloquent.
        return view("listar",['actores'=>$actores]);
    }
    public function listarapi() {
        return Actor::all();
    }
}
