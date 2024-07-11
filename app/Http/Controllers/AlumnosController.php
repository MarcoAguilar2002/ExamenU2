<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Http\Requests\CreateAlumnoRequest;

class AlumnosController extends Controller

{
    //
    public function index()
    {
        $alumnos = Alumno::get();
        return view('listado', compact('alumnos'));
    }

    public function create(){
        return view('ingreso');
    }

    public function store(CreateAlumnoRequest $request){

        Alumno::create($request->validated());

        return redirect()->route('alumnos.index');
    }

    public function show($id){
        $alumno = Alumno::find($id);
        return view('show', ['alumno' => $alumno]);
    }

}
