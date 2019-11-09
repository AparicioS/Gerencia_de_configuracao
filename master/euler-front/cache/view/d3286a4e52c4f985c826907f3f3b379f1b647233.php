<?php $__env->startSection('title', 'Cadastro de Concedente'); ?>

<?php $__env->startSection('content'); ?>

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
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Cadastro de Concedente</h2>
                <form method="post" action="/master/euler-front/model/ModelCadastroConcedente.php">
                    <fieldset>
                        <legend>Informações da Instituição</legend>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="razao">Razão Social</label>
                                <input type="text" class="form-control" id="razao" name="razao" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" placeholder="xx.xxx.xxx/xxxx-xx" class="form-control cnpj" id="cnpj" name="cnpj" required>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Endereço</legend>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="numero">Número</label>
                                <input type="text" class="form-control number" id="numero" name="numero" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control cep" id="cep" name="cep" placeholder="xxxxx-xxx" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="uf">UF</label>
                                <select name="uf" id="uf" class="campo_select" required>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Contato</legend>
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control telefone" id="telefone" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="representante">Representante</label>
                                <input type="text" class="form-control" id="representante" name="representante" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="cargo_representante">Cargo</label>
                                <input type="text" class="form-control" id="cargo_representante" name="cargo_representante" maxlength="50" required>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-primary">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>