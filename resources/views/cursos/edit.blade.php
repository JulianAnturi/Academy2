@extends('layouts.app')

@section('titulo', 'Editar Curso')

@section('contenido')

<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <br>
        <h2>Formulario de Edicion del curso </h2>
        <div class="form-group">
            <label for="nombre">Nombre del curso</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$cursito->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="duracion">Duración</label>
            <input id="duracion" class="form-control" type="text" name="duracion" value="{{$cursito->duracion}}" >
        </div>
        <div class="form-group">
            <br>
            <img width="150" src="{{Storage::url($cursito->imagen)}}" alt="">
            <br>

            <label for="imagen">Cargue la imagen del curso</label>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        <button class="btn btn-info" type="submit">Actualizar</button>
    </div>
</form>
@endsection
