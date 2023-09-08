@extends('layout.template')

@section('title', 'Vista del editar')
    
@section('content')
    <h1>Editando el curso de {{ $curso->name }} </h1>

    <form action="{{ route('courses.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre del curso</label>
        <br>
        <input type="text" name="name" id="name" value="{{ old('name', $curso->name) }}">
        <br>
        @error('name')
            <small> {{ $message }} </small>
        @enderror
        <br><br>

        <label for="description">Descripción</label>
        <br>
        <textarea name="description" id="description" cols="10" rows="5">
            {{ old('description', $curso->description) }}
        </textarea>
        <br>    
        @error('description')
            <small> {{ $message }} </small>
        @enderror
        <br><br>

        <label for="category">Categoria</label>
        <br>
        <input type="text" name="category" id="category" value="{{ old('category', $curso->category) }}">
        <br>
        @error('category')
            <small> {{ $message }} </small>
        @enderror
        <br><br>

        <button>Actualizar curso</button>
    </form>
@endsection