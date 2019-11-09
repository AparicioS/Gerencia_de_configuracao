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
            <h2>Cadastro de Produto</h2>
            <form method="post" action="/master/euler-front/model/ModelCadastroProduto.php">
                 <fieldset>
                    <div id="divCadastro" >
                            <input type="hidden" name='method' value='insertProduto'>
                            <fieldset>
                                <legend>Cadastro</legend>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" class="form-control" id="descricao" name="descricao" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="fabricante">Fabricante</label>
                                        <input type="text" class="form-control" id="fabricante" name="fabricante">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="valor">Valor</label>
                                        <input type="text" class="form-control money" id="valor" name="valor">
                                    </div>
              
                                </div>
                            </fieldset>
                    </div>
                </fieldset>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" onclick="validaCadatro(Date('d/m/Y'))">Cadastrar</button>
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