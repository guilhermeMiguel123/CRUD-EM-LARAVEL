@section('form')
    <h1>{{ isset($cliente) ? 'Editar Cliente' : 'Novo Cliente' }}</h1>
    <form action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}" method="POST">
        @csrf
        @if(isset($cliente))
            @method('PUT')
        @endif
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ isset($cliente) ? $cliente->nome : '' }}">
            <label for="nome">Documento:</label>
            <input type="text" id="documento" name="documento" value="{{ isset($cliente) ? $cliente->nome : '' }}">
            <label for="nome">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="{{ isset($cliente) ? $cliente->nome : '' }}">
            <label for="nome">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="{{ isset($cliente) ? $cliente->nome : '' }}">
        </div>
      
        <button type="submit">{{ isset($cliente) ? 'Atualizar' : 'Salvar' }}</button>
    </form>
@endsection

