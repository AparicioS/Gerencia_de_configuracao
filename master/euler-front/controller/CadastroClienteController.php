<?php
use App\BaseController;
require_once(__DIR__.'/../app/BaseController.php');

class CadastroClienteController extends BaseController{
    public function index(){
        echo $this->view->render('cadastro-cliente');
    }
}
