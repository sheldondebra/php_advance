<?php

use App\Controller\HomeController;
use App\Core\Route;

$route = new Route;

$route::get('/', [HomeController::class, 'index']);
$route::get('/', [HomeController::class, 'about']);
$route::run();