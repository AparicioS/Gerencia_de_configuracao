<?php
/**
 * Created by PhpStorm.
 * User: aparicio da silva
 * Date: 14/11/2018
 * Time: 16:27
 */

use App\BaseController;
require_once(__DIR__.'/../app/BaseController.php');


class BuscaPedidoController extends BaseController{

    public function index(){     
        $this->res = $this->buscar();
        echo $this->view->render('busca-pedido', ['pedido' => $this->res]);
    }
    
    public function buscar() {
        require_once 'model/conectar.php';
        $pedido = null;
        
        $conexao = Conectar();
        
        $sql = "SELECT * FROM pessoa";
        
        $ret = pg_query($conexao, $sql);
        $i = 0;
        while($row = pg_fetch_row($ret)) {
            $pedido[$i]['id'] = $row[0];
            $pedido[$i]['nome'] = $row[1];
            $i++;
        }
        
        return $pedido;
    }
}

