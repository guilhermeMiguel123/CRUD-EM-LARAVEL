



    <h1>{{ isset($cliente) ? 'Editar Cliente' : 'Novo Cliente' }}</h1>
    <form action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}" method="POST">
        @csrf
        @if(isset($cliente))
            @method('PUT')
        @endif
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ isset($cliente) ? $cliente->nome : '' }}">
        </div>
        <div>
                <label for="documento">Documento:</label>
                <input type="text" class="form-control" id="documento" name="documento" value="{{ isset($cliente) ? $cliente->documento : old('documento') }}">
            </div>
            <div>
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ isset($cliente) ? $cliente->telefone : old('telefone') }}">
            </div>
            <div>
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="{{ isset($cliente) ? $cliente->endereco : old('endereco') }}">
            </div>
      
        <button type="submit">{{ isset($cliente) ? 'Atualizar' : 'Salvar' }}</button>
    </form>

