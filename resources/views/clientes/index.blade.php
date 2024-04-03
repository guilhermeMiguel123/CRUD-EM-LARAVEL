@extends('welcome')
@include('clientes.list')
@include('clientes.form')

@section('content')


<button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#modalAdd">
    Adicionar
</button>

@yield('list')


<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalAddLabel">Adicionar cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @yield('form')
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

@endsection
