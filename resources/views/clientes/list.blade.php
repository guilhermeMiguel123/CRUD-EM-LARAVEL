@section('list')
    <h1>Lista de Clientes</h1>

    @if ($clientes->isEmpty())
        <p>Nenhum cliente cadastrado.</p>
    @else
        <table class="table table-striped-columns mt-5">
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Documento</th>
                <th>Ação</th>
            </tr>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->telefone}}</td>
                    <td>{{$cliente->endereco}}</td>
                    <td>{{$cliente->documento}}</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('clientes.show', $cliente->id) }}"><i class="fa-solid fa-edit"></i></a>
                            <form action="{{ route('clientes.show', $cliente->id) }}" method="GET">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
