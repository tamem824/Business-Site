<?php

use Core\Router;

$router =new Router();

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/jobs', 'jobs/index.php')->only('auth');
$router->get('/job', 'jobs/show.php');
$router->delete('/job', 'jobs/destroy.php');

$router->get('/job/edit', 'jobs/edit.php');
$router->patch('/job', 'jobs/update.php');

$router->get('/jobs/create', 'jobs/create.php');
$router->post('/jobs', 'jobs/store.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');