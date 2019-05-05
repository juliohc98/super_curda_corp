<?php

$router->get('', 'controllers/home.php');
$router->post('login', 'controllers/login.php');
$router->get('register', 'controllers/register.php');
$router->post('register', 'controllers/register-user.php');