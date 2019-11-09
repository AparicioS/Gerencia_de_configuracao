<?php

use App\BaseController;
require_once(__DIR__.'/../app/BaseController.php');

class BuscaClienteController extends BaseController{
    private $res;
    
    public function index(){
        $this->res = $this->buscaCliente();
        echo $this->view->render('busca-cliente', ['pessoa' => $this->res]);
    }
    
    public function buscaCliente() {
        require_once 'model/conectar.php';
        $aPessoa = null;
        
        $conexao = Conectar();
        
        $sql = "SELECT * FROM pessoa";
        
        $ret = pg_query($conexao, $sql);
        $i = 0;
        while($row = pg_fetch_row($ret)) {
            $aPessoa[$i]['id'] = $row[0];
            $aPessoa[$i]['nome'] = $row[1];
            $i++;
        }
        
        return $aPessoa;
    }
}
