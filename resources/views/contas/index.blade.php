@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Despesas</h1>
    <a href="{{ route('contas.create') }}" class="btn btn-primary mb-3">Criar Nova Despesa</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Despesa</th>
                <th>Preço da Despesa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contas as $conta)
            <tr>
                <td>{{ $conta->id }}</td>
                <td>{{ $conta->nome_despesa }}</td>
                <td>{{ $conta->preco_despesa }}</td>
                <td>
                    <a href="{{ route('contas.show', $conta->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('contas.edit', $conta->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('contas.destroy', $conta->id) }}" method="POST" style="display:inline;">
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
