<?php
require_once(__DIR__.'/vendor/autoload.php');
//require_once('app/App.php');
require_once('app/Router.php');

use App\Router;

//$app = new App();
$router = new Router();

$router
    ->get('/homeAdm', function () {
        require_once('controller/HomeAdmController.php');

        $oController = new HomeAdmController();
        $oController->index();
    })
    ->get('/cadastro-produto', function () {
        require_once('controller/CadastroProdutoController.php');

        $oController = new CadastroProdutoController();
        $oController->index();
    })
    ->get('/busca-produto', function () {
        require_once('controller/BuscaProdutoController.php');
        $oController = new BuscaProdutoController();
        $oController->index();
    })


    /*->on('GET', 'path/to/action', function () {
        return 'this is a hero return';
    })
    ->post('/(\w+)/(\w+)/(\w+)', function ($module, $class, $method) {
        var_dump([$module, $class, $method]);
    })
    ->get('/view/(\w+)', function ($view) {
        ob_start();
        require dirname(__DIR__) . "/view/{$view}.php";
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    })
    ->get('/(.*)', function ($uri) {
        var_dump($uri);
    })*/;
echo $router($router->method(), $router->uri());
?>
