
@extends('welcome')


@section('content')
    <h1>Detalhes da Assistência</h1>
    <p><strong>Descrição:</strong> {{ $assistencia->descricao }}</p>
    <p><strong>Técnico:</strong> {{ $assistencia->tecnico }}</p>
  
    <a href="{{ route('assistencias.edit', $assistencia->id) }}">Editar</a>
@endsection
