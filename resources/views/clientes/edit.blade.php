@extends('welcome')

@section('content')
    <div class="container">
        <h1 class="mb-4">Editar Cliente</h1>
        <form method="POST" action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}">
            @csrf
            @if(isset($cliente))
                @method('PUT')
            @endif

            <div class="form-group mb-3">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ isset($cliente) ? $cliente->nome : old('nome') }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="documento">Documento:</label>
                <input type="text" class="form-control" id="documento" name="documento" value="{{ isset($cliente) ? $cliente->documento : old('documento') }}">
            </div>
            <div class="form-group mb-3">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ isset($cliente) ? $cliente->telefone : old('telefone') }}">
            </div>
            <div class="form-group mb-3">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{ isset($cliente) ? $cliente->endereco : old('endereco') }}">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">{{ isset($cliente) ? 'Atualizar' : 'Adicionar' }}</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary mt-2">Voltar</a>
            </div>
        </form>
    </div>
@endsection
