@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Cartões</h1>
    <a href="{{ route('cartoes.create') }}" class="btn btn-primary mb-3">Criar Novo Cartão</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Cartão</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartoes as $cartao)
            <tr>
                <td>{{ $cartao->id }}</td>
                <td>{{ $cartao->nome_cartao }}</td>
                <td>
                    <a href="{{ route('cartoes.show', $cartao->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('cartoes.edit', $cartao->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('cartoes.destroy', $cartao->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
