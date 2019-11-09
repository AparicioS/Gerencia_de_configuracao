<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once 'conectar.php';

$conexao = Conectar();
$bErro = false;

if(isset($_POST['req']) && $_POST['req'] == 'preencheCampos') {
    
    $sql = " select id_produto,
                    descricao,
                    fabricante,
                    valor
             from produto              
            where id_produto = {$_POST['id']} ";

    $ret = pg_query($conexao, $sql);
    $aInfos = null;

    while($row = pg_fetch_row($ret)) {
        $aInfos['id_produto']   = $row[0];
        $aInfos['descricao']    = $row[1];
        $aInfos['fabricante']   = $row[2];
        $aInfos['valor']        = $row[3];
    }

    echo json_encode($aInfos);
} else{
    


$iCod           = $_POST['id_produto'];
$sDescricao     = $_POST['descricao'];
$sFabricante    = $_POST['fabricante'];
$iValor         = $_POST['valor'];  


$updateEnd = "UPDATE produto 
                SET descricao   = '{$sDescricao}',
                    fabricante  = '{$sFabricante}',
                    valor       = '{$iValor}'
            where id_produto = '{$iCod}'";                 
                       
exec_sql($bErro, $updateEnd, $conexao);


if(!$bErro) {
    commit($conexao);
    header("location:http://localhost/master/euler-front/busca-produto");
}
else {
    rollback($conexao);
}
Desconectar($conexao);

}