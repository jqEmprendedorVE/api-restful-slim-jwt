<?php

ActiveRecord\Config::initialize(function($cfg) {
    $cfg->set_model_directory( __DIR__ . '/../../src/models' );
    $cfg->set_connections(array(
        'development' => 'mysql://sgivestad:SokaStats%1@www.sgiv.org/sgivestad2'
    ));
});

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

$app->get('/', function ($request, $response) {
    return json_encode(array(
    	'mensaje'=>'API RESTful de clicSOKA v1'
    	));
});