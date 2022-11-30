<?php

use OOP\app\Controller\HomeController;
use OOP\app\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

Router::addRoute('GET', '/', HomeController::class, 'index', []);

Router::run();   
