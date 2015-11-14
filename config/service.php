<?php
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Router;

$di = new FactoryDefault();
$di->set('router', function(){
    $router = new Router();
    //$router->setDefaultModule('hello');
    $router->setDefaultModule('chapter03');
    $router->handle();
    return $router;
});
