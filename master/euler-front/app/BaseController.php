<?php
namespace App;

use duncan3dc\Laravel\BladeInstance;

class BaseController{

    protected $view;

    public function __construct()
    {
        $this->view = new BladeInstance(__DIR__."/../view", __DIR__."/../cache/view");
    }
}