<?php

require 'core/boostrap.php';
// echo '<pre>';
// die(var_dump($_SERVER));
// echo '</pre>';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());






