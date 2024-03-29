
@extends('welcome')

@include('assistencias.form')

@section('content')
    <h1>Lista de Assistências</h1>

    @if ($assistencias->isEmpty())
        <p>Nenhuma assistência cadastrada.</p>
    @else
        <ul>
            @foreach ($assistencias as $assistencia)
                <li>{{ $assistencia->descricao }}</li>
            @endforeach
        </ul>
    @endif

@endsection


