@extends('layouts.main')

@section('titulo', 'Cad Clientes - By Carlos Eduardo Vieira')

@section('titulo-pagina', 'Dados do Cliente: ' . $cliente->nome)

@section('conteudo')
<div class="row mb-3 mt-3">
    <!-- /.row 1 -->
    <div class="row pt-2">
        <div class="col-md-4">
            <p class="mostrar-dados"><span style="font-weight: 600;">Nome: </span> {{ $cliente->nome }}</p>
            <p style="mostrar-dados"><span style="font-weight: 600;">Email: </span> {{ $cliente->email }}</p>
            
            <p style="mostrar-dados"><span style="font-weight: 600;">Telefone: </span> {{ $cliente->telefone }}</p>
            <p style="mostrar-dados"><span style="font-weight: 600;">Whatsapp: </span> {{ $cliente->whatsapp }}</p>
            <p style="mostrar-dados"><span style="font-weight: 600;">Site/Blog: </span> {{ $cliente->site }}</p>

            <p style="mostrar-dados"><span style="font-weight: 600;">Endereço: </span> {{ $cliente->endereco }}</p>
            <p style="mostrar-dados"><span style="font-weight: 600;">Cidade: </span> {{ $cliente->cidade }}</p>
            <p style="mostrar-dados"><span style="font-weight: 600;">Estado: </span> {{ $cliente->estado }}</p>
        </div>

        <div class="col-md-5">
            <p class="mostrar-dados"><span style="font-weight: 600;">Serviços:</span>
                @foreach($cliente->servicos as $servico)
                    ({{ $servico }})
                @endforeach
            </p>
            <p style="mostrar-dados"><span style="font-weight: 600;">Status:</span>
                @if($cliente->status == 0)
                    Pendente
                @else
                    Concluído
                @endif
            </p>
            
            <p style="mostrar-dados"><span style="font-weight: 600;">Prazo de Entrega:</span>
                {{ date('d/m/Y', strtotime($cliente->data)) }}
            </p>

            <p style="mostrar-dados"><span style="font-weight: 600;">Descrição: <br></span> {{ $cliente->descricao }}</p>
        </div>
            
        <div class="col-md-3">
            <img src="/img/clientes.png">
        </div>
    </div>
    <!-- /.row 1 -->

    <!-- /.row 2 -->
    <div class="row pt-4 pb-4">
        <div class="col-md-6">
            <div class="form-group">
                <a href="/" class="btn btn-success">
                    <ion-icon name="arrow-back"></ion-icon> Voltar
                </a>

                <button class="btn btn-secondary" onclick="window.print()">
                    <ion-icon name="print"></ion-icon> Imprimir
                </button>
            </div>
        </div>
    </div>
    <!-- /.row 2 -->
</div>
@endsection