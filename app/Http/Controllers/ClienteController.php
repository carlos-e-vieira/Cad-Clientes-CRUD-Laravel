<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function principal() {

        $pesquisar = request('pesquisar');

        if($pesquisar) {

            $clientes = Cliente::where([
                ['nome', 'like', '%'.$pesquisar.'%']
            ])->get();

        } else {
            $clientes = Cliente::all();
        }

        return view('welcome', ['clientes' => $clientes, 'pesquisar' => $pesquisar]);

    }

    public function cadastrar() {

        return view('clientes.cadastrar');

    }

    public function inserir(Request $requisicao) {

        $cliente = new Cliente;

        $cliente->nome = $requisicao->nome;
        $cliente->email = $requisicao->email;

        $cliente->telefone = $requisicao->telefone;
        $cliente->whatsapp = $requisicao->whatsapp;
        $cliente->site = $requisicao->site;

        $cliente->endereco = $requisicao->endereco;
        $cliente->cidade = $requisicao->cidade;
        $cliente->estado = $requisicao->estado;

        $cliente->servicos = $requisicao->servicos;
        $cliente->status = $requisicao->status;
        $cliente->data = $requisicao->data;

        $cliente->descricao = $requisicao->descricao;

        $cliente->save();

        return redirect('/')->with('msg', 'Cadastro criado com sucesso!');

    }

    public function mostrar($id) {

        $cliente = Cliente::findOrFail($id);
        return view('clientes.mostrar', ['cliente' => $cliente]);

    }

    public function excluir($id) {
        
        Cliente::FindOrFail($id)->delete();
        return redirect('/')->with('msg', 'Cliente excluido com sucesso!');

    }

    public function editar($id) {

        $cliente = Cliente::findOrFail($id);
        return view('clientes.editar', ['cliente' => $cliente]);

    }

    public function atualizar(Request $requisicao) {

        Cliente::findOrFail($requisicao->id)->update($requisicao->all());
        return redirect('/')->with('msg', 'Cliente atualizado com sucesso!');

    }

}
