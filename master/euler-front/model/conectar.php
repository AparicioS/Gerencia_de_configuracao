<?php

function Conectar() {
    $str = "host=ec2-107-20-227-192.compute-1.amazonaws.com port=5432 dbname=d9mk8p58k739ut user=xhjuhlktzhabez
            password=083e54a5ac006efa54ef70d1d8d194adab0328391929ffebe926e718ec1b9ad5";

//    $str = "host=localhost port=5432 dbname=desafio2bd user=postgres
//            password=Apa131654";

    $conection = pg_connect($str);

    if (!$conection) {
        die('Erro de Conexão');
    } 
    else {
        return $conection;
    }
}

function Desconectar($Conn) {
    pg_close($Conn);
}

/**
 * 
 * @param Boolean $bErro sql executado com sucesso
 * @param String $sql string sql a ser executada
 * @param String $conexao pg_connect
 */
function exec_sql(&$bErro, $sql, $conexao) {
    $qry = pg_query($conexao, $sql);
    
    return $bErro = ($qry) ? false : true;
}

function commit($conexao){
    pg_query($conexao, 'commit');
}

function rollback($conexao){
    pg_query($conexao, 'rollback');
}