@extends('layout.template')

@section('title', 'Vista del crear')
    
@section('content')
    <h1>Formulario para crear un nuevo curso</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label for="name">Nombre del curso</label>
        <br>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <br>
        @error('name')
            <small> {{ $message }} </small>
        @enderror
        <br><br>

        <label for="description">Descripción</label>
        <br>
        <textarea name="description" id="description" cols="10" rows="5">
            {{ old('description') }}
        </textarea>
        <br>    
        @error('description')
            <small> {{ $message }} </small>
        @enderror
        <br><br>

        <label for="category">Categoria</label>
        <br>
        <input type="text" name="category" id="category" value="{{ old('category') }}">
        <br>
        @error('category')
            <small> {{ $message }} </small>
        @enderror
        <br><br>

        <button>Enviar</button>
    </form>
    <a href="{{ route('courses.index') }}">Regresar</a> 
@endsection