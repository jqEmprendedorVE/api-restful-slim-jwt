<?php
// constantes
const KEY = "qd2UtNBu0fVyW4Z2tARCEiLV4je4lclu";

//Agregando configuracion para la conexion de BD
ActiveRecord\Config::initialize(function($cfg) {
    $cfg->set_model_directory( __DIR__ . '/../../src/models' );
    $cfg->set_connections(array(
        'development' => 'mysql://jabonari_user:GkekMUrSTlG4qO@jabonario.com/jabonari_demo?charset=utf8'
    ));
});

// Agregando cabeceras para el CORS
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});

// Mensaje de bienvenida en el home
$app->get('/', function ($request, $response) {
    return json_encode(array(
    	'mensaje'=>'API RESTful de jqEmprendedorVE v1'
    	));
});

// Agregando funciones de Middleware
require __DIR__ . '/../middleware/autoload.php';
