@extends('layouts.main')

@section('titulo', 'Editar Cliente')

@section('titulo-pagina', 'Editar '. $cliente->nome)

@section('conteudo')
<div class="row mb-3 mt-3">
    <form action="/clientes/atualizar/{{ $cliente->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- /.row 1 -->
        <div class="row pt-2">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" required>
                </div>
            </div>
                
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $cliente->email }}" required>
                </div>
            </div>
        </div>
        <!-- /.row 1 -->

        <!-- /.row 2 -->
        <div class="row pt-2">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Telefone (Apenas Números)</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cliente->telefone }}" required>
                </div>
            </div>
                
            <div class="col-md-3">
                <div class="form-group">
                    <label>Whatsapp (Apenas Números)</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ $cliente->whatsapp }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Site/Blog</label>
                    <input type="text" class="form-control" id="site" name="site" value="{{ $cliente->site }}" required>
                </div>
            </div>
        </div>
        <!-- /.row 2 -->

        <!-- /.row 3 -->
        <div class="row pt-2">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $cliente->endereco }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $cliente->cidade }}" required>
                </div>
            </div>
                
            <div class="col-md-2">
                <div class="form-group">
                    <label>Estado</label>
                    <select name="estado" id="estado" class="form-control" value="{{ $cliente->estado }}" required>
                        <option value="{{ $cliente->estado }}">{{ $cliente->estado }}</option>
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Espirito Santo">Espirito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Nort">Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- /.row 3 -->

        <!-- /.row 4 -->
        <div class="row pt-2">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Serviços</label>
                    <div class="form-group mt-2">
                        <spam class="p-0">
                            <input type="checkbox" name="servicos[]" value="Venda"> Venda
                        </spam>

                        <spam class="p-4">
                            <input type="checkbox" name="servicos[]" value="Manutenção"> Manutenção
                        </spam>

                        <spam class="p-0">
                            <input type="checkbox" name="servicos[]" value="Instalação"> Instalação
                        </spam>

                        <spam class="p-4">
                            <input type="checkbox" name="servicos[]" value="Outros"> Outros
                        </spam>
                    </div>
                </div>
            </div>
                
            <div class="col-md-3">
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="0">Pendente</option>
                        <option value="1" {{ $cliente->status == 1 ? "selected='selected'" : "" }}>Concluído</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Prazo de Entrega</label>
                    <input type="date" class="form-control" id="data" name="data" value="{{ $cliente->data->format('Y-m-d') }}" required>
                </div>
            </div>
        </div>
        <!-- /.row 4 -->

        <!-- /.row 5 -->
        <div class="row pt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control" required>{{ $cliente->descricao }}</textarea>
                </div>
            </div>
        </div>
        <!-- /.row 5 -->

        <!-- /.row 5 -->
        <div class="row pt-4 pb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Atualizar">
                    
                    <a href="/" class="btn btn-danger btn-cancelar">Cancelar</a>
                </div>
            </div>
        </div>
        <!-- /.row 5 -->
    </form>
</div>
@endsection