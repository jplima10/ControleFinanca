<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cartao;

class CartaoController extends Controller
{
    public function index()
    {
        $cartoes = Cartao::all();
        return view('cartoes.index', compact('cartoes'));
    }

    public function create()
    {
        return view('cartoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_cartao' => 'required|max:15',
        ]);

        Cartao::create($request->all()); 

        return redirect()->route('cartoes.index')->with('success', 'Cartão Criado com Sucesso');
    }

    public function show($id)
    {
        $cartao = Cartao::findOrFail($id); 
        return view('cartoes.show', compact('cartao'));
    }

    public function edit($id)
    {
        $cartao = Cartao::findOrFail($id); 
        return view('cartoes.edit', compact('cartao'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_cartao' => 'required|max:15',
        ]);

        $cartao = Cartao::findOrFail($id); 
        $cartao->update($request->all());

        return redirect()->route('cartoes.index')->with('success', 'Cartão Atualizado com Sucesso');
    }

    public function destroy($id)
    {
        $cartao = Cartao::findOrFail($id);
        $cartao->delete();

        return redirect()->route('cartoes.index')->with('success', 'Cartão Deletado com Sucesso');
    }
}
