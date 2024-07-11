@extends('layouts.main')

@section('title','Ingreso')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-header bg-warning text-center">
            <h4>INGRESO</h4>
        </div>
        <div class="card-body">
            <form action="{{route('alumnos.store')}}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-3 col-form-label text-end">Nombre</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                        <div class="text-danger">
                            {{$errors->first('nombre')}}
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="curso" class="col-sm-3 col-form-label text-end">Curso</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="curso" value="{{ old('curso') }}">
                        <div class="text-danger">
                            {{$errors->first('curso')}}
                        </div>    
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nota1" class="col-sm-3 col-form-label text-end">Nota 1</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nota1" value="{{ old('nota1') }}">
                        <div class="text-danger">
                            {{$errors->first('nota1')}}
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nota2" class="col-sm-3 col-form-label text-end">Nota 2</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nota2" value="{{ old('nota2') }}">
                        <div class="text-danger">
                            {{$errors->first('nota2')}}
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
