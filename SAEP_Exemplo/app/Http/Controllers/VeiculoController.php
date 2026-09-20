<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function listar()
    {
        $veiculos = Veiculo::all();

        return view('veiculos.listar', compact('veiculos'));
    }

    public function create()
    {
        $clientes = Cliente::all();

        return view('veiculos.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        Veiculo::create([
            'placa' => $request->placa,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'cliente_id' => $request->cliente_id,
        ]);

        return redirect()->back()->with('success','Cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);

        $clientes = Cliente::all();

        return view('veiculos.edit', compact('veiculo', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::findOrFail($id);

        $veiculo->update([
            'placa' => $request->placa,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'cliente_id' => $request->cliente_id,
        ]);

        return redirect()->back()->with('success','Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Veiculo::destroy($id);

        return redirect()->back()->with('success','Deletado com sucesso!');
    }
}