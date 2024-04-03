@section('form')
    <h1>{{ isset($cliente) ? 'Editar Cliente' : 'Novo Cliente' }}</h1>
    <form action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}" method="POST">
        @csrf
        @if(isset($cliente))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
          </div>
          <div class="mb-3">
            <label for="documento" class="form-label">Documento</label>
            <input type="text" class="form-control" id="documento" name="documento" placeholder="Digite o documento">
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
          </div>
          <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereco">
          </div>
        <button class="btn btn-primary w-100" type="submit">{{ isset($cliente) ? 'Atualizar' : 'Salvar' }}</button>
    </form>
@endsection

