@extends('layouts.main')

@section('title','Listado')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-header text-center" style="background-color: #ffff00;"> <!-- Color de fondo amarillo -->
            <h4>Listado</h4>
        </div>
        <div class="card-body alumnos">
            @if($alumnos && count($alumnos) > 0)
                <table class="table table-hover text-center"> <!-- Añadir text-center para centrar el contenido -->
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $index => $alumno)
                            <tr class="alumno-row align-middle"> <!-- Añadir align-middle para centrar verticalmente -->
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>
                                    <a class="icon-link icon-link-hover fs-5" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="{{ route('alumnos.show', $alumno) }}">
                                        <i class="bi bi-person-circle"></i> {{ $alumno->nombre }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center my-4">No hay alumnos que mostrar</p>
            @endif
        </div>
    </div>
</div>

<style>
    .alumno-row:hover {
        background-color: #00ff00; /* Color de fondo verde al hacer hover */
        font-weight: bold;
    }
    .alumno-row a {
        text-decoration: none; /* Eliminar subrayado del enlace */
        display: inline-block; /* Hacer el enlace inline-block para aplicar el estilo correctamente */
        width: 100%; /* Hacer que el enlace ocupe todo el ancho de la celda */
    }
</style>
@endsection
