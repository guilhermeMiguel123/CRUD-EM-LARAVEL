
@extends('welcome')

@section('content')
    <h1>Editar Cliente</h1>
        <form method="POST" action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}">
            @csrf
            @if(isset($cliente))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ isset($cliente) ? $cliente->nome : old('nome') }}" required>
            </div>
            <div class="form-group">
                <label for="documento">Documento:</label>
                <input type="text" class="form-control" id="documento" name="documento" value="{{ isset($cliente) ? $cliente->documento : old('documento') }}">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ isset($cliente) ? $cliente->telefone : old('telefone') }}">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{ isset($cliente) ? $cliente->endereco : old('endereco') }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($cliente) ? 'Atualizar' : 'Adicionar' }}</button>
        </form>

    
@endsection