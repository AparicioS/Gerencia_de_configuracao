<?php
class App{
    public function __construct(){
        /*$controller = ((isset($_REQUEST['c']))?$_REQUEST['c']:'home');
        $action     = ((isset($_REQUEST['a']))?$_REQUEST['a']:'index');
        $nomeController = ucfirst($controller) . 'Controller';

        if(!file_exists('controller/' . $nomeController . '.php')){
            $nomeController = 'ErrorController';
        }

        require_once('controller/' . $nomeController . '.php');

        $oController = new $nomeController();
        $oController->$action();*/
    }
}