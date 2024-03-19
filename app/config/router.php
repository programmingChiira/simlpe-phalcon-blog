<?php

$router = $di->getRouter();

// Define your routes here

$router->add(
    '/about',
    [
        'controller' => 'index',
        'action'     => 'about',
    ]
);

$router->handle($_SERVER['REQUEST_URI']);
