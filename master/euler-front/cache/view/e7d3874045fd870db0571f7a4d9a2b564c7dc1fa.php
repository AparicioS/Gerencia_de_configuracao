<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>


<?php $__env->startSection('title', 'Home'); ?>

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
                    <a href="login">Logoff</a>&nbsp; &nbsp; &nbsp; 
					<a href="manual"target="blank">Manual</a>
                </div>
            </div>
        </div>
        <nav id="menu">
            <ul class="dropdrown">
                <li><a >Cadastros</a>
                    <ul>
                        <li><a href="cadastro-estagio">Estágio</a></li>
                    </ul>
                </li>
                <li><a >Impressões</a>
                    <ul>
                        <li><a href="termo-de-compromisso"target="blank">Termo de compromisso</a></li>
                        <li><a href="plano_de_atividades" target="blank">Plano de Atividades</a></li>
                        <li><a href="requerimento_de_orientacao" target="blank">Requerimento de Orientacao</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
    <div class="container" id="home">
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <td style=" font-weight: bold">Informações Pessoais </td>
                    </tr>
                    <tr>
                        <td style="width: 70%">Nome:</td>
                        <td style="width: 30%">CPF:</td>
                    </tr>
                    <tr>
                        <td style="width: 70%"><label id="labelnome"></label></td>
                        <td style="width: 30%"><label id="labelcpf"></label></td>
                    </tr>
                    <tr>
                        <td style="width: 70%">RG: </td>
                        <td style="width: 30%">Data de Nascimento:</td>
                    </tr>
                    <tr>
                        <td style="width: 70%"><label id="labelrg"></label></td>
                        <td style="width: 30%"><label id="labeldatanascimento"></label></td>
                        
                    </tr>
                    <tr>
                        <td style=" font-weight: bold">Endereço</td>
                    </tr>
                    <tr>
                        <td style="width: 70%">Logradouro:</td>
                        <td style="width: 30%">Número:</td>
                    </tr>
                    <tr>
                        <td style="width: 70%"><label id="labalogradouro"></label></td>
                        <td style="width: 30%"><label id="labelnumero"></label></td>
                    </tr>
                    <tr>
                        <td style="width: 70%">Bairro:</td>
                        <td style="width: 30%">CEP:</span></td>
                    </tr>
                    <tr>
                        <td style="width: 70%"><label id="labelbairro"></label></td>
                        <td style="width: 30%"><label id="labelcep"></label></td>
                        
                    </tr>
                    <tr>
                        <td>Cidade - UF:</td>
                    </tr>
                    <tr>
                        <td><label id="labelcidade"></label> - <label id="labeluf"></label></td>
                    </tr>
                    <tr>
                        <td style=" font-weight: bold">Contato</td>
                    </tr>
                    <tr>
                        <td colspan="2">E-mail:</td>
                    </tr>
                        <td><label id="labelemail"></label></td>
                    <tr>
                        <td style="width: 70%">Telefone:</td>
                        <td style="width: 30%">Celular:</td>
                    </tr>
                    <tr>
                        <td style="width: 70%"><label id="labeltelefone"></label></td>
                        <td style="width: 30%"><label id="labelcelular"></label></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="/master/euler-front/public/JS/js_home_principal.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>