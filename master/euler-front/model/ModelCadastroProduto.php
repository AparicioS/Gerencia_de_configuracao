<?php
require_once 'conectar.php';

$conexao = Conectar();
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
                                '{$sdescricao}',
                                '{$sFabricante}',
                                '{$sValor}' ); ";

    exec_sql($bErro, $insertProduto, $conexao);


    if(!$bErro) {
        commit($conexao);
        $ret = 1;
    }
    else {
        rollback($conexao);
        $ret = 0;
    }
    header("location:http://localhost/master/euler-front/cadastro-produto");
    exit;
    
    