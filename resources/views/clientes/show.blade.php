
@extends('layouts.app')

@section('content')
    <h1>Detalhes do Cliente</h1>
    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Documento:</strong> {{ $cliente->documento }}</p>
    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
    <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
@endsection
