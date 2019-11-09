<?php $__env->startSection('title', 'Cadastro de Estágio'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="container-fluid">
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
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Cadastro de Pedido</h2>
                <form method="post" action="/master/euler-front/model/ModelCadastroEstagio.php">
                    <fieldset>
                            <legend>Cliente</legend>
                        <div class="form-row">
                                <div class="form-group col-5 col-md-2 col-lg-1">
                                    <label for="conced">Cliente</label>
                                    <select class="campo_select" id="cliente" name="cliente" required data-validation-required-message="" required>
                                        <option value=''>Selecione</option>
                                        <?php $__currentLoopData = $cliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clientes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=<?php echo e($clientes['id']); ?>><?php echo e($clientes['nome']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                            </div>
                        <legend>Pedido</legend>
                        <div class="form-row">
                            <div class="form-group col-5 col-md-2 col-lg-1">
                                <label for="ano">Produto</label>
                                 <select class="campo_select" id="produto" name="produto" required data-validation-required-message="" required>
                                    <option value=''>Selecione</option>
                                    <?php $__currentLoopData = $produto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produtos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value=<?php echo e($produtos['id']); ?> title=<?php echo e($produtos['valor']); ?>><?php echo e($produtos['nome']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group col-5 col-md-2 col-lg-1">
                                <label for="semestre">Quantidade</label>
                                <input type="text" class="form-control ano" id="quantidade" name="quantidade" required>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="curso">Desconto</label>
                                <select class="campo_select" id="desconto" name="desconto">
                                    <option value=1>Selecione</option>
                                    <option value="0.95">5%</option>
                                    <option value="0.90">10%</option>
                                    <option value="0.85">15%</option>
                                 
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="/master/euler-front/public/JS/js_cadastro_estagio.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>