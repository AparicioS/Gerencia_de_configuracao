<?php
use App\BaseController;
require_once(__DIR__.'/../app/BaseController.php');

class CadastroProdutoController extends BaseController{
    public function index(){
        echo $this->view->render('cadastro-produto');
    }
}