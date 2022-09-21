@extends('layouts.main')

@section('titulo', 'Cad Clientes - By Carlos Eduardo Vieira')

@section('titulo-pagina', 'Gestão de Clientes')

@section('conteudo')
<div class="row mb-3 mt-3">

    <!-- BTN Cadastrar Cliente -->
    <div class="col-md-6">
        <div class="input-group">
            <a href="clientes\cadastrar" class="btn btn-primary btn-cadastrar" title="Cadastrar Cliente">
                <ion-icon name="person-add-outline"></ion-icon> Cadastrar Cliente
            </a>
        </div>
    </div>
    <!-- /BTN Cadastrar Cliente -->

    <!-- INPUT Pesquisar -->
    <div class="col-md-6">
        <form action="/" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Pesquisar cliente" id="pesquisar" name="pesquisar" value="">
                <span class="input-group-append">
                    <button type="submit" class="btn btn-warning btn-pesquisar" title="Pesquisar"><ion-icon name="search"></ion-icon></button>
                </span>

                <span class="input-group-append">
                    <a href="/" class="btn btn-secondary btn-limpar-pesquisa" title="Limpar">
                        <ion-icon name="refresh"></ion-icon>
                    </a>
                </span>
            </div>
        </form>
    </div>
    <!-- /INPUT Pesquisar -->
</div>

<div class="row mt-5">
    <table class="table table-hover borda-table bg-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Contato</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id       }}</td>
                    <td>{{ $cliente->nome     }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->email    }}</td>
                    <td>{{ $cliente->cidade   }}</td>
                    <td>{{ $cliente->estado   }}</td>
                    <td>
                        <a href="https://api.whatsapp.com/send?phone=55{{ $cliente->whatsapp }}&text=Ola." class="btn btn-light" target="_blank">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </a>

                        <a href="mailto:{{ $cliente->email }}" class="btn btn-light" target="_blank">
                            <ion-icon name="mail-outline"></ion-icon>
                        </a>
                    </td>

                    <td>
                        <a href="/clientes/{{ $cliente->id }}" class="btn btn-success">
                            <ion-icon name="eye-outline" class="icones" title="Visualizar cliente {{ $cliente->nome }}"></ion-icon>
                        </a>

                        <a href="/clientes/editar/{{ $cliente->id }}" class="btn btn-info" title="Editar cliente {{ $cliente->nome }}">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>

                        <form action="/clientes/{{ $cliente->id }}" method="POST" class="form-tabela">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-deletar" title="Excluir cliente {{ $cliente->nome }}"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection