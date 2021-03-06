<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::prefix('admin', function (RouteBuilder $routes) {
    $routes->connect('/', [
        'controller' => 'Admin',
        'action' => 'dashboard',
        'plugin' => false,
        'admin' => true
    ]);

    $routes->fallbacks('DashedRoute');
});
