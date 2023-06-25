<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Profesor;

class Profesores extends Controller
{
    //
    public function index(){
        $profesores = DB::table('profesores')->get();
        return view('profesores.listado', ['profesores' =>$profesores]);
    }

    public function form_registro(){
        return view('profesores.registro');
    }

    public function registrar(Request $r){
        $profesor = new Profesor();
        $profesor->codprofesor = $r->input('codprofesor');
        $profesor->nomprofesor = $r->input('nomprofesor');
        $profesor->catprofesor = $r->input('catprofesor');
        $profesor->save();
        return redirect()->route('listadoProfe');
    }

    public function eliminar($id){
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->route('listadoProfe');
    }

    public function editar($id){
        $profesor = Profesor::findOrFail($id);
        return view ('profesores.editar', compact('profesor'));
    }

    public function actualizar(Request $req, $id){
        $profesor = Profesor::findOrFail($id);
        $profesor->codprofesor = $req->input('codprofesor');
        $profesor->nomprofesor = $req->input('nomprofesor');
        $profesor->catprofesor = $req->input('catprofesor');
        $profesor->save();
        return redirect()->route('listadoProfe');
    }
}
