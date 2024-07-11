@extends('layouts.main')

@section('title','Detalles del Alumno')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-header text-center" style="background-color: #00ff00;"> <!-- Color de fondo verde -->
            <h4>Alumno #{{$alumno->id}}</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <tbody>
                    <tr>
                        <th scope="row">NOMBRE</th>
                        <td>{{ $alumno->nombre }}</td>
                    </tr>
                    <tr>
                        <th scope="row">CURSO</th>
                        <td>{{ $alumno->curso }}</td>
                    </tr>
                    <tr>
                        <th scope="row">NOTA 1</th>
                        <td>{{ $alumno->nota1 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">NOTA 2</th>
                        <td>{{ $alumno->nota2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">PROMEDIO</th>
                        <td>{{ ($alumno->nota1 +  $alumno->nota2)/ 2}}</td>
                    </tr>
                    <tr>
                        <th scope="row">CONDICIÓN</th>
                        <td>
                            @if((($alumno->nota1 +  $alumno->nota2)/ 2)>= 11)
                                <span style="color: green; font-weight: bold;">APROBADO</span>
                            @else
                                <span style="color: red; font-weight: bold;">DESAPROBADO</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">FECHA REG</th>
                        <td>{{ $alumno->created_at->format('d/m/Y') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
