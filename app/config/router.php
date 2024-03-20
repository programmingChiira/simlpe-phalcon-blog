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

$router->add(
    '/authChat',
    [
        'controller' => 'index',
        'action'     => 'authChat',
    ]
);

$router->add(
    '/authContact',
    [
        'controller' => 'index',
        'action'     => 'authContact',
    ]
);

$router->add(
    '/authProjectList',
    [
        'controller' => 'index',
        'action'     => 'authProjectList',
    ]
);

$router->add(
    '/authTaskBoard',
    [
        'controller' => 'index',
        'action'     => 'authTaskBoard',
    ]
);

$router->add(
    '/authTicketList',
    [
        'controller' => 'index',
        'action'     => 'authTicketList',
    ]
);

$router->add(
    '/authTicketDetail',
    [
        'controller' => 'index',
        'action'     => 'authTicketDetail',
    ]
);

$router->handle($_SERVER['REQUEST_URI']);
