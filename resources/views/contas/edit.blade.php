@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Despesa</h1>

    <form action="{{ route('contas.update', $conta->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome_despesa">Nome da Despesa</label>
            <input type="text" name="nome_despesa" id="nome_despesa" class="form-control" value="{{ $conta->nome_despesa }}" required>
        </div>

        <div class="form-group">
            <label for="preco_despesa">Preço da Despesa</label>
            <input type="number" name="preco_despesa" id="preco_despesa" class="form-control" value="{{ $conta->preco_despesa }}" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('contas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
