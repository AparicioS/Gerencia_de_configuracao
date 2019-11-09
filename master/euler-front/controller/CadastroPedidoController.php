<?php
use App\BaseController;
require_once(__DIR__.'/../app/BaseController.php');

class CadastroPedidoController extends BaseController{
   private $res;
   private $produto;
    
    public function index(){
        $this->produto = $this->buscaProduto();
        $this->res = $this->buscaCurso();
        echo $this->view->render('cadastro-pedido', ['cliente' => $this->res, 'produto' => $this->produto]);
    }
    
    public function buscaCurso() {
        require_once 'model/conectar.php';

        $conexao = Conectar();
        
        $sql = "SELECT * FROM pessoa";
        
        $ret = pg_query($conexao, $sql);
        $i = 0;
        $aPessoa = array();
        while($row = pg_fetch_row($ret)) {
            $aPessoa[$i]['id'] = $row[0];
            $aPessoa[$i]['nome'] = $row[1];
            $i++;
        }
        
        return $aPessoa;
    }
    
    public function buscaProduto() {
        require_once 'model/conectar.php';
        
        $conexao = Conectar();
        
        $sql = "SELECT id_produto, descricao, valor FROM produto";
        
        $ret = pg_query($conexao, $sql);
        $i = 0;
        $produto = array();
        while($row = pg_fetch_row($ret)) {
            $produto[$i]['id'] = $row[0];
            $produto[$i]['nome'] = $row[1];
            $produto[$i]['valor'] = $row[2];
            $i++;
        }
        
        return $produto;
    }
}
