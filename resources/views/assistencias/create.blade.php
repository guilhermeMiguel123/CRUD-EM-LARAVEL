@extends('layouts.app')

@section('content')
    <h1>Cadastrar Assistência</h1>
    <form method="POST" action="{{ route('assistencias.store') }}">
        @csrf

        <div class="form-group">
            <label for="cliente_id">ID do Cliente:</label>
            <input type="text" class="form-control" id="cliente_id" name="cliente_id" value="{{ isset($cliente) ? $cliente->id : old('cliente_id') }}" readonly>
        </div>

        
        
        <button type="submit" class="btn btn-primary">Cadastrar Assistência</button>
    </form>
@endsection
