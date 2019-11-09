<?php
require_once 'conectar.php';

$conexao = Conectar();

if(isset($_POST['req']) && $_POST['req'] == 'insertProduto') {
    windows.alert('erwer');
    $sql = "SELECT MAX(id_produto) FROM produto";

    $ret = pg_query($conexao, $sql);
    $iCodApol;

    while($row = pg_fetch_row($ret)) {
        $iCodApol = $row;
    }
    $iCodApol       = $iCodApol[0] + 1;
    $sdescricao     = $_POST['descricao'];
    $sFabricante    = $_POST['fabricante'];
    $sValor         = $_POST['valor'];

    $insertProduto = "INSERT INTO produto (
                                id_produto,
                                descricao,
                                fabricante,
                                valor
                                ) VALUES (
                                {$iCodApol},
                                {$sdescricao},
                                {$sFabricante},
                                '{$sValor}' ); ";

    exec_sql($bErro, $insertProduto, $conexao);
    
    echo $ret;
    exit;
}

if(isset($_POST['req']) && $_POST['req'] == 'deleteProduto') {
     $iCodApol       = $_POST['id_produto'];
    $delete = "DELETE produto 
                    where  id_produto   = {$iCodApol}";
    exec_sql($bErro, $delete, $conexao);        

    if(!$bErro) {
        commit($conexao);
        $ret = 1;
    }
    else {
        rollback($conexao);
        $ret = 0;
    }
    echo $ret;
    exit;
    
}
if(isset($_POST['req']) && $_POST['req'] == 'updateProduto') {
     $iCodApol       = $_POST['id_produto'];
    $sdescricao     = $_POST['descricao'];
    $sFabricante    = $_POST['fabricante'];
    $sValor         = $_POST['valor'];
    $update = "UPDATE produto 
                    SET     descricao   = {$sdescricao},
                            fabricante  = {$sFabricante},
                            valor       = {$sValor}
                    where  id_produto = {$iCodApol}";

        exec_sql($bErro, $update, $conexao);        

    if(!$bErro) {
        commit($conexao);
        $ret = 1;
    }
    else {
        rollback($conexao);
        $ret = 0;
    }
    echo $ret;
    exit;
    }
    