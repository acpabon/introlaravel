@extends('layout.template')

@section('title', $curso->name)
    
@section('content')
    {{-- <h1>Bienvido(a) al curso de {{ $curso }} </h1> --}}

    <p>
        Nombre: {{ $curso['name'] }}
    </p>

    <p>
        Descripción: {{ $curso['description'] }}
    </p>

    <p>
        Categoria: {{ $curso['category'] }}
    </p>

    <br><br>
    <p>
        <a href="{{ route('courses.edit', $curso['id']) }}">Editar</a>

        <form action="{{ route('courses.destroy', $curso->id) }}" method="POST">
            @csrf
            @method('delete')

            <button type="submit">
                Eliminar
            </button>
        </form>

        <a href="{{ route('courses.index') }}">Regresar</a>
    </p>
@endsection