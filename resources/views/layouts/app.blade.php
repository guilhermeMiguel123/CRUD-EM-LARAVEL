
@section('content')
<nav>
    <ul>
        <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
        <li><a href="{{ route('assistencias.index') }}">Assistências</a></li>
    </ul>
</nav>

<div class="content">
    <div id="solicitacoes"></div> 
</div>
@endsection
