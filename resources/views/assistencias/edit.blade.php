@extends('welcome')

@section('content')
    <div class="container">
        <h1 class="mb-4">Editar Assistência</h1>
        <form method="POST" action="{{ isset($assistencia) ? route('assistencias.update', $assistencia->id) : route('assistencias.store') }}">
            @csrf
            @if(isset($assistencia))
                @method('PUT')
            @endif

            <div class="form-group mb-3">
                <label for="cliente_id">ID do Cliente:</label>
                <input type="text" class="form-control" id="cliente_id" name="cliente_id" value="{{ isset($assistencia) ? $assistencia->cliente_id : old('cliente_id') }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="data">Data:</label>
                <input type="text" class="form-control" id="data" name="data" value="{{ isset($assistencia) ? $assistencia->data : old('data') }}">
            </div>
            <div class="form-group mb-3">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{ isset($assistencia) ? $assistencia->descricao : old('descricao') }}">
            </div>
            <div class="form-group mb-3">
                <label for="tecnico">Técnico:</label>
                <input type="text" class="form-control" id="tecnico" name="tecnico" value="{{ isset($assistencia) ? $assistencia->tecnico : old('tecnico') }}">
            </div>
            <div class="form-group mb-3">
                <label for="data_resolucao">Data de Resolução:</label>
                <input type="text" class="form-control" id="data_resolucao" name="data_resolucao" value="{{ isset($assistencia) ? $assistencia->data_resolucao : old('data_resolucao') }}">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">{{ isset($assistencia) ? 'Atualizar' : 'Adicionar' }}</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary mt-2">Voltar</a>
            </div>
        </form>
    </div>
@endsection
