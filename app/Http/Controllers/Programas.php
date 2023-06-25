<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Programa;

class Programas extends Controller
{
    //
    public function index(){
        $programas = DB::table('programas')->get();
        return view('programas.listado', ['programas' =>$programas]);
    }

    public function form_registro(){
        return view('programas.registro');
    }

    public function registrar(Request $r){
        $programa = new Programa();
        $programa->codprograma = $r->input('codprograma');
        $programa->nomprograma = $r->input('nomprograma');
        $programa->facultad = $r->input('facultad');
        $programa->save();
        return redirect()->route('listadoPro');
    }

    public function eliminar($id){
        $programa = Programa::findOrFail($id);
        $programa->delete();
        return redirect()->route('listadoPro');
    }

    public function editar($id){
        $programa = Programa::findOrFail($id);
        return view ('programas.editar', compact('programa'));
    }

    public function actualizar(Request $req, $id){
        $programa = Programa::findOrFail($id);
        $programa->codprograma = $req->input('codprograma');
        $programa->nomprograma = $req->input('nomprograma');
        $programa->facultad = $req->input('facultad');
        $programa->save();
        return redirect()->route('listadoPro');
    }
}
