<?php $__env->startSection('title', 'Cadastro de Estágio'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row" id="nav-bar">
            <div class="col-12">
                <div class="row justify-content-between" style="height: 100%;">
                    <div class="col-5 col-sm-3 col-lg-2 total-flex" style="justify-content: left;">
                        <h1>EULER</h1>
                    </div>
                    <h6>Estágios Universitários Lavratura e Emissão de Relatórios</h6>
                    <div class="col-4 col-sm-3 col-md-2 total-flex">
                        <a href="home">Home</a>
                    </div>
                </div>
            </div>
            <nav id="menu">
                <ul class="dropdrown">
                    <li><a href="#">Cadastros</a>
                        <ul>
                            <li><a href="cadastro-estagio">Estágio</a></li>
                            <li><a href="cadastro-concedente">Concedente</a></li>
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
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Cadastro de Estágio</h2>
                <form>
                    <fieldset>
                        <legend>Estágio</legend>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="obrigatorio" id="check-obrigatorio" name="tipo[]" onclick="desabilitapolice()">
                                    <label class="form-check-label" for="check-obrigatorio">
                                        Obrigatório
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="nao-obrigatorio" id="check-nao-obrigatorio" name="tipo[]" onclick="habilitapolice()">
                                    <label class="form-check-label" for="check-nao-obrigatorio">
                                        Não obrigatório
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-7 col-md-2">
                                <label for="ano">Ano</label>
                                <input type="text" class="form-control ano" id="ano" name="ano" required>
                            </div>
                            <div class="form-group col-5 col-md-2 col-lg-1">
                                <label for="semestre">Semestre</label>
                                <select name="semestre" id="semestre" class="campo_select" required>
                                    <option value="1">Primeiro</option>
                                    <option value="2">Segundo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="curso">Curso</label>
                                <select name="curso" id="curso" class="campo_select">
                                    <option value="eso">ESO - Engenharia de Software</option>
                                </select>
                            </div>
                            <div class="form-group col-5 col-md-6">
                                <label for="area">Área</label>
                                <input type="text" class="form-control" id="area" name="area" maxlength="50" required>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div id="topnav">
                            <legend>Concedente</legend>
                            <input type="text" placeholder="Pesquisar...">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="local">Local</label>
                                <input type="text" class="form-control" id="local" name="local" maxlength="50" required>
                            </div>
                            <div class="form-group col-6 col-md-2">
                                <label for="horario-inicial">Início</label>
                                <input type="time" class="form-control" id="horario-inicial" name="horario-inicial" required>
                            </div>
                            <div class="form-group col-6 col-md-2">
                                <label for="horario-final">Término</label>
                                <input type="time" class="form-control" id="horario-final" name="horario-final" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="supervisor">Supervisor</label>
                                <input type="text" class="form-control" id="supervisor" name="supervisor" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="cargo-supervisor">Cargo</label>
                                <input type="text" class="form-control" id="cargo-supervisor" name="cargo-supervisor" maxlength="50" required>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Descritivo</legend>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="objetivos">Objetivos</label>
                                <input type="text" class="form-control" id="objetivos" name="objetivos" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="atividades">Atividades</label>
                                <input type="text" class="form-control" id="atividades" name="atividades" maxlength="50" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descricao">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" maxlength="50" required>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Apólice</legend>
                        <div class="form-row">
                            <div class="form-group col-6 col-md-3">
                                <label for="numero">Número</label>
                                <input type="text" class="form-control number" id="numero" name="numero" required>
                            </div>
                            <div class="form-group col-6 col-md-3">
                                <label for="valor">Valor</label>
                                <input type="text" class="form-control money" id="valor" name="valor" maxlength="50" required>
                            </div>
                            <div class="form-group col-6 col-md-3">
                                <label for="seguradora">Seguradora</label>
                                <input type="text" class="form-control money" id="seguradora" name="seguradora" maxlength="50" required>
                            </div>
                            <div class="form-group col-6 col-md-3">
                                <label for="emBranco"></label>
                            </div>
                            <div class="form-group col-6 col-md-3">
                                <label for="valor-bolsa">Valor da bolsa</label>
                                <input type="text" class="form-control money" id="valor-bolsa" name="valor-bolsa" maxlength="50" required>
                            </div>
                            <div class="form-group col-6 col-md-3">
                                <label for="vale-transporte">Vale transporte</label>
                                <input type="text" class="form-control money" id="vale-transporte" name="vale-transporte" maxlength="50" required>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="../public/JS/js_cadastro_estagio.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>