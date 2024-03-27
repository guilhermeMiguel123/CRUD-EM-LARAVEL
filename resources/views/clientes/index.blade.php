

@extends('layouts.app')

@section('content')
    <h1>Lista de Clientes</h1>

    @if ($clientes->isEmpty())
        <p>Nenhum cliente cadastrado.</p>
    @else
        <ul>
            @foreach ($clientes as $cliente)
                <li>{{ $cliente->nome }}</li>
            @endforeach
        </ul>
    @endif
@endsection
