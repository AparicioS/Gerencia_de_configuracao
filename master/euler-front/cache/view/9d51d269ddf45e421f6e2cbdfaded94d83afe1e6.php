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
                <h2>Consulta de Pedido</h2>
                    <fieldset>
                         <legend>Pesquisar</legend>
                            <label for="conced">Cliente</label>
                            <select class="campo_select" id="pedido_select" name="pedido_select">
                                <option value='0'>Selecione</option>
                                <?php $__currentLoopData = $pedido; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedidos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=<?php echo e($pedidos['id']); ?>><?php echo e($pedidos['nome']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        <button type="submit" class="btn btn-primary" onclick="buscarPedido()">Buscar</button>
                    </fieldset>
                    <form method="post" action="/master/euler-front/model/ModelConsultaPedido.php">
                        <input style="display:none" type="text" id="id_pessoa" name="id_pessoa" required>
                        </fieldset>
                        <fieldset>
                            <legend>Produtos:</legend>
                            <table class="tabela_de_pedidos">
                            <tr>
                                <td>
                                    <label>Descrição </label>
                                </td>
                                <td>
                                    <label >Fabricante</label>
                                </td>
                                <td>
                                    <label>Preço Unitario</label>
                                </td>
                                 <td >
                                    <label>Quantidade</label>
                                </td>
                                <td >
                                    <label >Preço Unitario Venda</label>
                                </td>
                               
                            </tr>
                            </table>
                            <div class="form-group" id="tabela_pedido"> 
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cancelar Pedido</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="/master/euler-front/public/JS/js_consulta_pedido.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>