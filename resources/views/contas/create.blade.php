@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Nova Despesa</h1>

    <form action="{{ route('contas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome_despesa">Nome da Despesa</label>
            <input type="text" name="nome_despesa" id="nome_despesa" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="preco_despesa">Preço da Despesa</label>
            <input type="number" name="preco_despesa" id="preco_despesa" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="cartao_id">Cartão</label>
            <select name="cartao_id" id="cartao_id" class="form-control" required>
                <option value="">Selecione um cartão</option>
                @foreach($cartoes as $cartao)
                    <option value="{{ $cartao->id }}">{{ $cartao->nome_cartao }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('contas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
