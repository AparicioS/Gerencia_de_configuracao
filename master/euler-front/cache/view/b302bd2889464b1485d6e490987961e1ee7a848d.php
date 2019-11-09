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
            <h2>Consulta de Produto</h2>
                 <fieldset>
                    <label for="produto_select">Pesquisar</label>
                    <select class="campo_select" id="produto_select" name="produto_select" style="width :300px" >
                        <option value='0'>Selecione</option>
                        <?php $__currentLoopData = $produto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produtos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=<?php echo e($produtos['id']); ?>><?php echo e($produtos['nome']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <button type="button" class="btn btn-primary"onclick="buscarProduto()">Buscar</button></a>                     
                 </fieldset>
            <form method="post" action="/master/euler-front/model/ModelConsultaProduto.php">
                 <fieldset>
                    <div class="form-row">
                        <div style="width :100px" >
                            <label for="numeroApolice">Código</label>
                            <input readonly type="text" class="form-control" id="id_produto" name="id_produto" style="width :100px" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="numeroApolice">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="valor">Fabricante</label>
                            <input type="text" class="form-control" id="fabricante" name="fabricente">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="valor">Valor</label>
                            <input type="text" class="form-control money" id="valor" name="valor">
                        </div>

                    </div>
                    <div class="form-row">
                       
                            <button type="submit" class="btn btn-primary" onclick="validaCadatro(Date('d/m/Y'))">Salvar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="/master/euler-front/public/JS/js_consulta_produto.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>