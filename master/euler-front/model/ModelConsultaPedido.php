<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once 'conectar.php';

$conexao = Conectar();
$bErro = false;

$iCod   = $_POST['id_pessoa'];

$deletePedido = "DELETE  
                    FROM public.pedido
                WHERE pedido.id_pessoa= '{$iCod}'";                 
                       
exec_sql($bErro, $deletePedido, $conexao);


if(!$bErro) {
    commit($conexao);
    header("location:http://localhost/master/euler-front/busca-pedido");
}
else {
    rollback($conexao);
}
Desconectar($conexao);

