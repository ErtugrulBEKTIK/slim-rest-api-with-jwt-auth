<?php

require './vendor/autoload.php';
require './src/config/settings.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$app = new \Slim\App(['settings' => $settings]);


$container = $app->getContainer();
require './src/config/container.php';

// Middlewares
require './src/middlewares/jwt.php';

// Routes
require "./src/routes/auth.php";
require "./src/routes/films.php";

$app->run();