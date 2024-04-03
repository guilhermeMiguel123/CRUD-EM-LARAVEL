
@section('list')
    <h1>Lista de Assistências</h1>

    @if ($assistencias->isEmpty())
        <p>Nenhuma assistência cadastrada.</p>
    @else
        <table class="table table-striped-columns mt-5">
            <tr>
                <th>ID do cliente</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Técnico</th>
                <th>Data de Resolução</th>
                <th>Ação</th>
            </tr>
            @foreach ($assistencias as $assistencia)
                <tr class="mb-3"> 
                    <td>{{$assistencia->cliente_id}}</td>
                    <td>{{$assistencia->data}}</td>
                    <td>{{$assistencia->descricao}}</td>
                    <td>{{$assistencia->tecnico}}</td>
                    <td>{{$assistencia->data_resolucao}}</td>
                    <td>
                           <div class="d-flex justify-content-between">
                                <a href="{{ route('assistencias.show', $assistencia->id) }}"><i class="fa-solid fa-edit"></i></a>
                                <form action="{{ route('assistencias.show', $assistencia->id) }}" method="GET">
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </form>
                            </div>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
