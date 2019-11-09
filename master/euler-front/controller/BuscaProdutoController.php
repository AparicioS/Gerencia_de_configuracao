<?php
use App\BaseController;
require_once(__DIR__.'/../app/BaseController.php');

class BuscaProdutoController extends BaseController{
    public function index(){
        $this->res = $this->buscar();
        echo $this->view->render('busca-produto', ['produto' => $this->res]);
    }
    
    public function buscar() {
        require_once 'model/conectar.php';
        $produto = null;
        
        $conexao = Conectar();
        
        $sql = "SELECT * FROM produto";
        
        $ret = pg_query($conexao, $sql);
        $i = 0;
        while($row = pg_fetch_row($ret)) {
            $produto[$i]['id'] = $row[0];
            $produto[$i]['nome'] = $row[1];
            $i++;
        }
        
        return $produto;
    }
}