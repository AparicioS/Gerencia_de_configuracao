<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once 'conectar.php';

 $conexao = Conectar();

$bErro = false;
if(isset($_POST['req']) && $_POST['req'] == 'preencheCampos') {
    
    $sql = " select id_pessoa,
                    nome,
                    cpf,
                    rg,
                    datanascimento,
                    email,
                    telefone,
                    celular,
                    matricula,
                    logradouro,
                    numero,
                    bairro,
                    cep,
                    cidade,
                    uf
             from pessoa
             join endereco using(id_endereco)
              
            where id_pessoa = {$_POST['id']} ";

    $ret = pg_query($conexao, $sql);
    $aInfos = null;

    while($row = pg_fetch_row($ret)) {
        $aInfos['id_pessoa']      = $row[0];
        $aInfos['nome']           = $row[1];
        $aInfos['cpf']            = $row[2];
        $aInfos['rg']             = $row[3];
        $aInfos['datanascimento'] = $row[4];
        $aInfos['email']          = $row[5];
        $aInfos['telefone']       = $row[6];
        $aInfos['celular']        = $row[7];
        $aInfos['matricula']      = $row[8];
        $aInfos['logradouro']     = $row[9];
        $aInfos['numero']         = $row[10];
        $aInfos['bairro']         = $row[11];
        $aInfos['cep']            = $row[12];
        $aInfos['cidade']         = $row[13];
        $aInfos['uf']             = $row[14];
    }

    echo json_encode($aInfos);
}else{

$sLograd    = $_POST['logradouro'];
$iNumero    = $_POST['numero'];
$sBairro    = $_POST['bairro'];
$sCep       = $_POST['cep'];
$sCidade    = $_POST['cidade'];
$sUf        = $_POST['uf'];

$iCod       = $_POST['id_pessoa'];
$sNome      = $_POST['nome'];
$sCpf       = $_POST['cpf'];
$iRg        = $_POST['rg'];
$dDataNasc  = $_POST['data_nascimento'];
$sEmail     = $_POST['email'];
$sTelefone  = $_POST['telefone'];
$sCelular   = $_POST['celular'];    

$sql = "SELECT id_endereco FROM pessoa
                where id_pessoa = '{$iCod}'";

    $ret = pg_query($conexao, $sql);
    $iCod;
    $row = pg_fetch_row($ret);
        $iCodEnd = $row[0];

$updateEnd = "UPDATE endereco 
                SET logradouro = '{$sLograd}',
                    numero = {$iNumero},
                    bairro = '{$sBairro}',
                    cidade = '{$sCep}',
                    cep = '{$sCidade}',
                    uf = '{$sUf}'  
            where id_endereco = '{$iCodEnd}'";                 
                       
exec_sql($bErro, $updateEnd, $conexao);

$update = "UPDATE pessoa 
            SET nome = '{$sNome}',
                cpf = '{$sCpf}',
                rg = '{$iRg}',
                datanascimento = '{$dDataNasc}',
                email = '{$sEmail}',
                telefone = '{$sTelefone}',
                celular = '{$sCelular}'     
            where id_pessoa = '{$iCod}'";                 

exec_sql($bErro, $update, $conexao);

if(!$bErro) {
    commit($conexao);
    header("location:http://localhost/master/euler-front/busca-cliente");
}
else {
    rollback($conexao);
}
Desconectar($conexao);

}

