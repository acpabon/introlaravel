@extends('layout.template')

@section('title', 'Principal')
    
@section('content')
    <h1 class="text-4xl">Lista de los cursos</h1>

    <a href="{{ route('courses.create') }}">Crear Curso</a>
    <hr>
    <hr>
    <hr>
    <hr>

    <table class="table-auto">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoria</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($courses as $c)
                <tr>
                    <td>{{ $c['id'] }} </td>
                    <td>{{ $c['name'] }} </td>
                    <td>{{ $c['description'] }} </td>
                    <td>{{ $c['category'] }} </td>
                    <td>
                        <a href="{{ route('courses.show', $c['id']) }}">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $courses->links() }}
@endsection