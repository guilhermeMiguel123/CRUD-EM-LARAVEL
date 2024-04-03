@extends('welcome')

@section('content')
    <h1 class="text-center">Detalhes do Cliente</h1>
    <div class="card mb-5">
        <ul class="list-group list-group-flush ">
            <li class="list-group-item"><p><strong>Nome:</strong> {{ $cliente->nome }}</p></li>
            <li class="list-group-item"><p><strong>Documento:</strong> {{ $cliente->documento }}</p></li>
            <li class="list-group-item"><p><strong>Telefone:</strong> {{ $cliente->telefone }}</p></li>
            <li class="list-group-item"><p><strong>Endereço:</strong> {{ $cliente->endereco }}</p></li>
        </ul>
    </div>

    <div class="text-center">
        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-outline-primary mb-3 mr-3">Editar</a>
   
        <button type="button" class="btn btn-outline-danger mb-3" data-bs-toggle="modal" data-bs-target="#confirmacaoExclusao">Excluir</button>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
    </div>

    <div class="modal fade" id="confirmacaoExclusao" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Confirmação de Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza de que deseja excluir este cliente?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
