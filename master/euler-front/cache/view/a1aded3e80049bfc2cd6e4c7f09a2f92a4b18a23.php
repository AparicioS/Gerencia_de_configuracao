<?php $__env->startSection('title', 'Home Administrador'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row" id="nav-bar">
        <div class="col-12">
            <div class="row justify-content-between" style="height: 100%;">
                <div class="col-5 col-sm-3 col-lg-2 total-flex" style="justify-content: left;">
                    <h1>EULER</h1>
                </div>
                <h6>Estágios Universitários Lavratura e Emissão de Relatórios</h6>
            </div>
        </div>
        <nav id="menu">
            <ul class="dropdrown">
                <li><a style="color: white">Cadastros</a>
                    <ul>
                        <li><a onclick="Mudarestado('divCadastroApolice')">Apolice de Seguro</a></li>
                        <li><a onclick="Mudarestado('divCadastroArea')">Area de Estagio</a></li>
                        <li><a onclick="Mudarestado('divCadastroOrientador')">Professor Orientador</a></li>
                        <li><a href="cadastro-coordenador">Coordenador Geral</a></li>
                    </ul>
                </li>
                <li><a href="#">Impressões</a>
                    <ul>
                        <li><a>Documento 1</a></li>
                        <li><a>Documento 2</a></li>
                        <li><a>Documento 3</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
    <div class="container" id="home">
        <div class="row">
            <div class="col">
                <fieldset>
                    <legend>Dashboard Administrador</legend>
                    <div id="divCadastroApolice" style="display: none">
                        <form>
                            <fieldset>
                                <legend>Cadastro Apólice</legend>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="numeroApolice">Nº Apólice</label>
                                        <input type="text" class="form-control" id="nApolice" name="Numero Apolice" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="valor">Valor</label>
                                        <input type="text" class="form-control" id="valorApolice" name="Valor Apolice">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="seguradora">Seguradora</label>
                                        <input type="text" class="form-control seguradora" id="seguradora" name="Seguradora Apolice">
                                    </div>
                                </div>
                                <div class="form-row">

                                    <button id="buttonCadastrarApolice" type="submit" class="btn btn-primary">Salvar</button>

                                    <button id="buttonCadastrarApolice" style="margin-left: 5px" onclick="Mudarestado('divCadastroApolice')" class="btn btn-primary">Cancelar</button>

                                </div>
                            </fieldset>
                        </form>
                    </div>

                </fieldset>

                 <div id="divCadastroArea" style="display: none">
                                    <form>
                                        <fieldset>
                                            <legend>Cadastro Area</legend>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="Curso">Curso</label>
                                                    <select></select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="Area">Area</label>
                                                    <input type="text" class="form-control" id="Area" name="Area">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="Atividade">Atividade</label>
                                                    <textarea type="text" class="form-control seguradora" id="Atividade" name="Atividade"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">

                                                <button id="buttonCadastrarArea" type="submit" class="btn btn-primary">Salvar</button>

                                                <button id="buttonCadastrarArea" style="margin-left: 5px" onclick="Mudarestado('divCadastroArea')" class="btn btn-primary">Cancelar</button>

                                            </div>
                            </fieldset>
                        </form>
                 </div>


                <div style="display: none" id="divCadastroOrientador">
                    <fieldset>
                        <legend>Cadastro Orientador</legend>
                        <div class="form-group col-md-4">
                            <label for="nomeOrientador">Professor Orientador</label>
                            <input type="text" class="form-control" id="professorOrientador" name="Professor Orientador" required>
                        </div>
                        <div class="form-row">
                            <button id="buttonCadastrarOrientador" type="submit" class="btn btn-primary">Salvar</button>
                            <button id="buttonCadastrarOrientador" style="margin-left: 5px" onclick="Mudarestado('divCadastroOrientador')" class="btn btn-primary">Cancelar</button>
                        </div>
                    </fieldset>
                </div>
                <div id="gridAdm">
                    <fieldset>
                        <legend>Estágios Cadastrados</legend>
                        Grid
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
<?php $__env->startSection('scripts'); ?>
<script src="/master/euler-front/public/JS/js_homeAdm.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>