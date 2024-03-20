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

$router->add(
    '/contact',
    [
        'controller' => 'index',
        'action'     => 'contact',
    ]
);

$router->add(
    '/post',
    [
        'controller' => 'index',
        'action'     => 'post',
    ]
);

$router->add(
    '/search',
    [
        'controller' => 'index',
        'action'     => 'search',
    ]
);

$router->add(
    '/category',
    [
        'controller' => 'index',
        'action'     => 'category',
    ]
);

$router->add(
    '/authDashboard',
    [
        'controller' => 'index',
        'action'     => 'authDashboard',
    ]
);

$router->add(
    '/authEmail',
    [
        'controller' => 'index',
        'action'     => 'authEmail',
    ]
);

$router->handle($_SERVER['REQUEST_URI']);
