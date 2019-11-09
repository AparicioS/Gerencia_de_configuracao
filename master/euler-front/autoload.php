<?php

function autoload($class) {
    //echo 'Controllers\\' . $class;

    require_once(__DIR__ . '\controller\\' . $class . '.php');
}
spl_autoload_register('autoload');