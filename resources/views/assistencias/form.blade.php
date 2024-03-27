

    <h1>{{ isset($assistencia) ? 'Editar Assistência' : 'Nova Assistência' }}</h1>
    <form action="{{ isset($assistencia) ? route('assistencias.update', $assistencia->id) : route('assistencias.store') }}" method="POST">
        @csrf
        @if(isset($assistencia))
            @method('PUT')
        @endif
        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="{{ isset($assistencia) ? $assistencia->descricao : '' }}">
        </div>
     
        <button type="submit">{{ isset($assistencia) ? 'Atualizar' : 'Salvar' }}</button>
    </form>
