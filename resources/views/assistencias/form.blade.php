
@section('form')
    <h1>{{ isset($assistencia) ? 'Editar Assistência' : 'Nova Assistência' }}</h1>
    <form action="{{ isset($assistencia) ? route('assistencias.update', $assistencia->id) : route('assistencias.store') }}" method="POST">
        @csrf
        @if(isset($assistencia))
            @method('PUT')
        @endif
        
        <div class="mb-3">
            <label for="decricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="decricao" name="decricao" placeholder="Digite a descrição">
          </div>
        <div class="mb-3">
            <label for="cliente_id" class="form-label">ID do Cliente</label>
            <input type="text" class="form-control" id="cliente_id" name="cliente_id" placeholder="Digite o Id do cliente">
          </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="text" class="form-control" id="data" name="data" placeholder="Digite o nome do técnico">
          </div>
        <div class="mb-3">
            <label for="data_resolucao" class="form-label">Data de Resolução</label>
            <input type="text" class="form-control" id="data_resolucao" name="data_resolucao" placeholder="Digite a data">
          </div>
        <div class="mb-3">
            <label for="tecnico" class="form-label">Técnico</label>
            <input type="text" class="form-control" id="tecnico" name="tecnico" placeholder="Digite a data de resolução">
          </div>
     
          <button class="btn btn-primary w-100" type="submit">{{ isset($assistencia) ? 'Atualizar' : 'Salvar' }}</button>
    </form>
@endsection
