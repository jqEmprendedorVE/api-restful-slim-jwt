<?php
ini_set('display_errors', 1);
ini_set('date.timezone', 'America/Caracas');

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;

require __DIR__ . '/../src/config/settings.php';

$app->group('/api', function () use ($app) {
	//Customer routes
	require __DIR__ . '/../src/routes/api/customers.php';

	//Rutas de usuarios
	require __DIR__ . '/../src/routes/api/usuarios.php';
});

// Recursos utiles de la DB
require __DIR__ . '/../src/routes/utils.php';


$app->run();