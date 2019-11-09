<?php $__env->startSection('title', 'Cadastro de Coordenador'); ?>

<?php $__env->startSection('content'); ?>
<div class="row" id="nav-bar">
    <div class="col-12">
        <div class="row justify-content-between" style="height: 100%;">
            <div class="col-5 col-sm-3 col-lg-2 total-flex" style="justify-content: left;">
                <h1>SVGC</h1>
            </div>
            <h6>Sistema de Venda Gerencia de Configuração</h6>
            <div class="col-4 col-sm-3 col-md-2 total-flex">
                <a href="homeAdm">Home</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Consulta de Cliente</h2>
                <fieldset>
                    <legend>Pesquisar</legend>
                    <label for="conced">Cliente:</label>
                    <select class="campo_select" id="pessoa" name="pessoa" style="width :500px">
                        <option value='0'>Selecione</option>
                        <?php $__currentLoopData = $pessoa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aPessoas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=<?php echo e($aPessoas['id']); ?>><?php echo e($aPessoas['nome']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <button type="submit" class="btn btn-primary" onclick="buscarCliente()">Buscar</button>
                </fieldset>
            <form method="post" action="/master/euler-front/model/ModelConsultaCliente.php">
                <fieldset>
                    <legend>Cliente</legend>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="nome">Codigo</label>
                            <input readonly type="text" class="form-control" id="id_pessoa" name="id_pessoa" style="width :100px" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" maxlength="50" required >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control cpf" id="cpf" name="cpf" maxlength="14" onchange="if (this.value.length == 14) {
                                        provarProFarahQueEuSeiUsarMetodo('chupa faráh')
                                    } else {
                                        alert(this.value.length);
                                    }" placeholder="xxx.xxx.xxx-xx" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rg">RG</label>
                            <input type="text" class="form-control rg" id="rg" name="rg" maxlength="7" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="data_nascimento">Data de nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
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
                            <input type="text" class="form-control number" id="numero" name="numero" maxlength="8" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cep">CEP</label>
                            <input type="text" placeholder="xxxxx-xxx" class="form-control cep" id="cep" name="cep" maxlength="9" required>
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
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control telefone" id="telefone" name="telefone" placeholder="(xx) xxxx-xxxx">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control celular" id="celular" name="celular" placeholder="(xx) xxxxx-xxxx">
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" >Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="/master/euler-front/public/JS/js_cadastro_usuario.js" type="text/javascript"></script>
<script src="/master/euler-front/public/JS/js_consulta_cliente.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>