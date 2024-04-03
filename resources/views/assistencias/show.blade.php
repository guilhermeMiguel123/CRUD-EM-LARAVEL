@extends('welcome')

@section('content')
    <h1 class="text-center">Detalhes da Assistência</h1>
    <div class="card mb-5">
        <ul class="list-group list-group-flush ">
            <li class="list-group-item"><p><strong>ID do Cliente:</strong> {{ $assistencia->cliente_id }}</p></li>
            <li class="list-group-item"><p><strong>Data:</strong> {{ $assistencia->data }}</p></li>
            <li class="list-group-item"><p><strong>Descrição:</strong> {{ $assistencia->descricao }}</p></li>
            <li class="list-group-item"><p><strong>Técnico:</strong> {{ $assistencia->tecnico }}</p></li>
            <li class="list-group-item"><p><strong>Data de Resolução:</strong> {{ $assistencia->data_resolucao }}</p></li>
        </ul>
    </div>

    <div class="text-center">
        <a href="{{ route('assistencias.edit', $assistencia->id) }}" class="btn btn-outline-primary mb-3 mr-3">Editar</a>
   
        <button type="button" class="btn btn-outline-danger mb-3" data-bs-toggle="modal" data-bs-target="#confirmacaoExclusao">Excluir</button>
    </div>
    
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('assistencias.index') }}" class="btn btn-secondary">Voltar</a>
    </div>

    <div class="modal fade" id="confirmacaoExclusao" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
      
    </div>

    <div class="modal fade" id="exclusaoSucessoModal" tabindex="-1" aria-labelledby="exclusaoSucessoModalLabel" aria-hidden="true">
      
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('deleteForm').addEventListener('submit', function() {
            var exclusaoSucessoModal = new bootstrap.Modal(document.getElementById('exclusaoSucessoModal'), {
                keyboard: false
            });
            exclusaoSucessoModal.show();
        });
    </script>
@endsection
