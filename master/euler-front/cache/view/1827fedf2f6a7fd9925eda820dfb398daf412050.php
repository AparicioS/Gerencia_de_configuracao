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
                    <a href="login">Logoff</a>
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
    <div class="container" id="home">
        <div class="row">
            <div class="col">
                <p >Nome: <label id="labelnome"></label></p>
                <p>CPF: <label id="labelcpf"></label><span id="rg">RG:<label id="labelrg"></label></span></p>
                <p>Data de Nascimento: <label id="labeldatanascimento"></label></p></br>
                <p>Endereço </p>
                <p>Logradouro: <label id="labalogradouro"></label><span id="numero">Número: <label id="labelnumero"></label></span></p>
                <p>Bairro <label id="labelbairro"></label><span id="cep">CEP: </span><label id="labelcep"></label></p>
                <p>Cidade - UF: <label id="labelcidade"></label> - <label id="labeluf"></label></p></br>
                <p>Contato</p>
                <p>E-mail: <label id="labelemail"></label></p>
                <p>Telefone: <label id="labeltelefone"></label><span id="celular">Celular: </span><label id="labelcelular"></label></p></br>
                <p>Curso</p>
                <p>Nome do Curso: <label id="labelcurso"></label></p>
                <p>Matricula: <label id="labelmatricula"></label></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>