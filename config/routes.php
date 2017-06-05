<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin('Support', ['path' => '/'], function (RouteBuilder $route) {
    $route->prefix('admin', function (RouteBuilder $route) {
        $route->extensions(['json']);

        $route->scope('/support', [], function (RouteBuilder $route) {
            $route->fallbacks();
        });
    });
});
