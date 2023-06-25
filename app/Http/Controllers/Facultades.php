<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get();
        return view('facultades.listado', ['facultades'=>$facultades]);
    }

    public function form_registro(){
        return view('facultades.registro');
    }

    public function registrar(Request $r){
        $facultad = new Facultad();
        $facultad->codFacultad = $r->input('codfacultad');
        $facultad->nomFacultad = $r->input('nomfacultad');
        $facultad->save();
        return redirect()->route('listadoFac');
    }

    public function eliminar($id){
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFac');
    }

    public function editar($id){
        $facultad = Facultad::findOrFail($id);
        return view ('facultades.editar', compact('facultad'));
    }

    public function actualizar(Request $req, $id){
        $facultad = Facultad::findOrFail($id);
        $facultad->codfacultad = $req->input('codfacultad');
        $facultad->nomfacultad = $req->input('nomfacultad');
        $facultad->save();
        return redirect()->route('listadoFac');
    }
}
