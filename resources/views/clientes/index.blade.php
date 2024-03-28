

@extends('welcome')
@include('clientes.form')

@section('content')
@yield('form')

    <h1>Lista de Clientes</h1>


    @if ($clientes->isEmpty())
        <p>Nenhum cliente cadastrado.</p>
    @else
        <ul>
            @foreach ($clientes as $cliente)
                <a  href="{{ route('clientes.show', $cliente->id) }}"><li>{{ $cliente->nome }}</li></a>
            @endforeach
        </ul>
    @endif
@endsection
