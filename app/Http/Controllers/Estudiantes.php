<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiantes.listado', ['estudiantes' =>$estudiantes]);
    }

    public function form_registro(){
        return view('estudiantes.registro');
    }

    public function registrar(Request $r){
        $estudiante = new Estudiante();
        $estudiante->codestudiante = $r->input('codestudiante');
        $estudiante->nomestudiante = $r->input('nomestudiante');
        $estudiante->edaestudiante = $r->input('edaestudiante');
        $estudiante->fechestudiante = $r->input('fechestudiante');
        $estudiante->sexestudiante = $r->input('sexestudiante');
        $estudiante->ciudad = $r->input('ciudad');
        $estudiante->barrio = $r->input('barrio');
        $estudiante->programa = $r->input('programa');
        $estudiante->save();
        return redirect()->route('listadoEst');
    }

    public function eliminar($id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('listadoEst');
    }

    public function editar($id){
        $estudiante = Estudiante::findOrFail($id);
        return view ('estudiantes.editar', compact('estudiante'));
    }

    public function actualizar(Request $req, $id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->codestudiante = $req->input('codestudiante');
        $estudiante->nomestudiante = $req->input('nomestudiante');
        $estudiante->edaestudiante = $req->input('edaestudiante');
        $estudiante->fechestudiante = $req->input('fechestudiante');
        $estudiante->sexestudiante = $req->input('sexestudiante');
        $estudiante->ciudad = $req->input('ciudad');
        $estudiante->barrio = $req->input('barrio');
        $estudiante->programa = $req->input('programa');
        $estudiante->save();
        return redirect()->route('listadoEst');
    }
}
