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
    public function formulario() {
        $actor=new Actor();
        return view("formulario",['actor'=>$actor]);
    }
    public function formulariomodificar($id) {
        $actor=Actor::find($id);
        
        return view("formulario",['actor'=>$actor]);
    }
    public function formulariomodificarPost(Request $req, $id) {
        $actorAntiguo=Actor::find($id);        
        $actor=new Actor($req->all()); 
        $actorAntiguo->first_name=$actor->first_name;     
        $actorAntiguo->last_name=$actor->last_name;
        $actorAntiguo->save();
        return redirect('/listar');
    }
    public function formularioPost(Request $req) {
        
        $actor=new Actor($req->all());
        $actor->save();
        return redirect('/listar');
        //return view("formulario",['actor'=>$actor]);
    }
}
