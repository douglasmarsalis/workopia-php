<?php

// return [
//     '/' => 'controllers/home.php',
//     '/listings' => 'controllers/listings/index.php',
//     '/listings/create' => 'controllers/listings/create.php',
//     '404' => 'controllers/error/404.php'
// ];

//inspectAndDie($uri);
// localhost:8000 -> will see string(1) "/"
// localhost:8000/listings -> will see string(9) "/listings"

$router -> get('/', 'controllers/home.php');
$router -> get('/listings', 'controllers/listings/index.php');
$router -> get('/listings/create', 'controllers/listings/create.php');