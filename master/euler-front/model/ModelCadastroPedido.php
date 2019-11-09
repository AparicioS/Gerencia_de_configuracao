<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once 'conectar.php';

$conexao = Conectar();

if(isset($_POST['req']) && $_POST['req'] == 'preencheCampos') {
    
$sql = "select produto.id_produto,
                    produto.descricao,
                    produto.fabricante,
                    produto.valor,
                    itempedido.quantidade,
                    itempedido.valor
             FROM produto
			left join itempedido on produto.id_produto = itempedido.id_produto
			left join pedido on pedido.id_pedido = itempedido.id_pedido          
            where pedido.id_pessoa = {$_POST['id']} ";

    $ret = pg_query($conexao, $sql);
    $aInfos = null;
        $i = 0;
    while($row = pg_fetch_row($ret)) {
        $aInfos[$i]['id_produto']   = $row[0];
        $aInfos[$i]['descricao']    = $row[1];
        $aInfos[$i]['fabricante']   = $row[2];
        $aInfos[$i]['valorProduto'] = $row[3];
        $aInfos[$i]['quantidade']   = $row[4];
        $aInfos[$i]['valorVenda']   = $row[5];
            $i++;
    }

    echo json_encode($aInfos);

    
}else{
    
$icliente = isset($_POST['cliente']) ? $_POST['cliente'] : 'null';
$iproduto = isset($_POST['produto']) ? $_POST['produto'] : 'null';
$iquantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : 'null';
$idesconto = isset($_POST['desconto']) ? $_POST['desconto'] : 'null';

$select = "select coalesce (max(id_pedido),0) + 1 id_pedido from pedido";
$qry = pg_query($conexao, $select);
$oRes = pg_fetch_row($qry);
$iIdPedido = $oRes[0];

$insertPedidos = "INSERT INTO pedido  VALUES ($iIdPedido, $icliente)";
exec_sql($bErro, $insertPedidos, $conexao);

$insertEsta = "INSERT INTO itempedido  VALUES ($iIdPedido,$iproduto,$iquantidade, (Select ((valor * $idesconto)) from produto where id_produto = {$iproduto})); ";
exec_sql($bErro, $insertEsta, $conexao);

header("location: http://localhost/master/euler-front/cadastro-pedido");
    
}