<?php

use App\BaseController;
require_once(__DIR__.'/../app/BaseController.php');

class HomeAdmController extends BaseController{
    private $res;
    
    public function index(){
        $this->res = $this->buscaCurso();
        echo $this->view->render('homeAdm', ['cursos' => $this->res]);
    }
    
    public function buscaCurso() {
        require_once 'model/conectar.php';
        $aCurso = null;
        
        $conexao = Conectar();
        
        $sql = "SELECT * FROM curso";
        
        $ret = pg_query($conexao, $sql);
        $i = 0;
        while($row = pg_fetch_row($ret)) {
            $aCurso[$i]['id'] = $row[0];
            $aCurso[$i]['nome'] = $row[1];
            $i++;
        }
        
        return $aCurso;
    }
}
