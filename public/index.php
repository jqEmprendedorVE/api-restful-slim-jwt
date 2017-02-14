<?php
ini_set('display_errors', 1);
ini_set('date.timezone', 'America/Caracas');


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

ActiveRecord\Config::initialize(function($cfg) {
    $cfg->set_model_directory( __DIR__ . '/../src/models' );
    $cfg->set_connections(array(
        'development' => 'mysql://sgivestad:SokaStats%1@www.sgiv.org/sgivestad2'
    ));
});

$app = new \Slim\App;

$app->get('/', function ($request, $response) {
    return $response->getBody()->write('API de clicSOKA .V1');
});

$app->group('/api', function () use ($app) {
	//Customer routes
	require __DIR__ . '/../src/routes/customers.php';

	//Rutas de usuarios
	require __DIR__ . '/../src/routes/usuarios.php';
});

// Recursos utiles de la DB
require __DIR__ . '/../src/routes/utils.php';


$app->run();