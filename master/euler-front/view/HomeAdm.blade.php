@extends('layout.app')
@section('title', 'Home Administrador')

@section('content')
<div class="container-fluid">
    <div class="row" id="nav-bar">
        <div class="col-12">
            <div class="row justify-content-between" style="height: 100%;">
                <div class="col-5 col-sm-3 col-lg-2 total-flex" style="justify-content: left;">
                    <h1>SVGC</h1>
                </div>
                <h6>Sistema de Venda Gerencia de Configuração</h6>
            </div>
        </div>
        <nav id="menu">
            <ul class="dropdrown">
                <li><a style="color: white" >Produto</a>
                    <ul>
                        <li><a href="cadastro-produto">Cadastrar</a></li>
                        <li><a href="busca-produto">Consulta</a></li>
                       
                    </ul>
                </li>
                 <li><a style="color: white">Cliente</a>
                    <ul>      
                        <li><a href="cadastro-cliente">Cadastrar</a></li>
                        <li><a href="busca-cliente">Consulta</a></li>
                    </ul>
                </li>
                 <li><a style="color: white">Pedidos</a>
                    <ul>      
                        <li><a href="cadastro-pedido">Cadastrar</a></li>
                        <li><a href="busca-pedido">Consulta</a></li>
                    </ul>
                </li>
            </ul>
        </nav>    
    </div>
    
    <div class="container" id="home">
        <div class="row">
            <div class="col">
                <div style="display: none" id="divDeletarCliente">
                    <fieldset>
                        <legend>Deletar Cliente</legend>
                        <div class="form-group">
                            <label for="nomeOrientador">Cliente</label>
                            <input type="text" class="form-control" id="professorOrientador" name="Professor Orientador" required>
                        </div>
                        <div class="form-row">
                            <button id="buttonCadastrarOrientador" type="submit" onclick="salvarOrientador()" class="btn btn-primary">Deletar</button>
                         
                        </div>
                    </fieldset>
                </div>
                <div style="display: none" id="divAlterarPesquisar">
                    <div class="form-row">
                        <div class="form-group col-5 col-md-2 col-lg-1">
                            <label for="conced">Pesquisar</label>
                            <select class="campo_select" id="conced" name="conced">
                                <option value='0'>Selecione</option>
                                @foreach($concedente as $concedentes)
                                <option value={{$concedentes['id']}}>{{$concedentes['nome']}}</option>
                                @endforeach
                            </select>
                     
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="numeroApolice">Descrição</label>
                            <input type="text" class="form-control rg" id="nApolice" name="nApolice" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="valor">Fabricante</label>
                            <input type="text" class="form-control money" id="valorApolice" name="valorApolice">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="valor">Valor</label>
                            <input type="text" class="form-control money" id="valorApolice1" name="valorApolice">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-6 col-md-2">
                            <a href="cadastro-concedente"><button type="button" class="btn btn-primary">Salvar</button></a>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6 col-md-2">
                            <a href="cadastro-concedente"><button type="button" class="btn btn-primary">Deletar</button></a>
                        </div>
                    </div>
                    
                </div>
                <div>
                    <div style="display: none" id="divCadastraPedido">
                           <div class="form-group col-5 col-md-2 col-lg-1">
                            <label for="conced">Cliente</label>
                            <select class="campo_select" id="conced" name="conced">
                                <option value='0'>Seleciona</option>
                                @foreach($concedente as $concedentes)
                                <option value={{$concedentes['id']}}>{{$concedentes['nome']}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-row">
                        <div class="form-group  col-md-3">
                           <label for="conced">Produto   </label>
                            <select class="campo_select" id="conced" name="conced">
                                <option value='0'>Seleciona</option>
                                @foreach($concedente as $concedentes)
                                <option value={{$concedentes['id']}}>{{$concedentes['nome']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-5 col-md-3 col-lg-1">
                             <button type="button" class="btn btn-primary">Adicionar</button>
                        </div>
                     

                    </div>
                       
                    </div>
                    
                </div>
                <div id="gridAdm" style="display: block;">
                    <fieldset>
                        <legend></legend>
						
                     
                    </fieldset>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection

@section('scripts')
    <link href="/master/euler-front/public/css/grid.css" rel="stylesheet" type="text/css"/>
    <script src="/master/euler-front/public/JS/js_homeAdm.js" type="text/javascript"></script>
@endsection