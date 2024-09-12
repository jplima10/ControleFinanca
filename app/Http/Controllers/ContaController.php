<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conta;
use App\Cartao;

class ContaController extends Controller
{
    public function index()
    {
        $contas = Conta::all();
        return view('contas.index', compact('contas'));
    }
    
    public function create()
    {
        $cartoes = Cartao::all(); 
        return view('contas.create', compact('cartoes'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nome_despesa' => 'required|max:100',
            'preco_despesa' => 'required',
            'cartao_id' => 'required|exists:cartaos,id'
        ]);
        
        Conta::create($request->all());

        return redirect()->route('contas.index')->with('success', 'Despesa Criada com Sucesso');
    }

    public function show($id)
    {
        $conta = Conta::findOrFail($id);
        return view('contas.show', compact('conta'));
    }
    
    public function edit($id)
    {
        $conta = Conta::findOrFail($id);
        $cartoes = Cartao::all();
        return view('contas.edit', compact('conta', 'cartoes'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_despesa' => 'required|max:100',
            'preco_despesa' => 'required',
            'cartao_id' => 'required|exists:cartaos,id' 
        ]);

        $conta = Conta::findOrFail($id);
        $conta->update($request->all());
        
        return redirect()->route('contas.index')->with('success', 'Despesa Atualizada com Sucesso');
    }

    public function destroy($id)
    {
        $conta = Conta::findOrFail($id);
        $conta->delete();

        return redirect()->route('contas.index')->with('success', 'Despesa Deletada com Sucesso');
    }
}
