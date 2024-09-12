@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Novo Cartão</h1>

    <form action="{{ route('cartoes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome_cartao">Nome do Cartão</label>
            <input type="text" name="nome_cartao" id="nome_cartao" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('cartoes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
