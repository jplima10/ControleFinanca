@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cartão</h1>

    <form action="{{ route('cartoes.update', $cartao->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome_cartao">Nome do Cartão</label>
            <input type="text" name="nome_cartao" id="nome_cartao" class="form-control" value="{{ $cartao->nome_cartao }}" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('cartoes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
