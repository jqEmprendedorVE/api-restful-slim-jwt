<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


// Obtener todos los clientes
$app->get('/customers',function(Request $request, Response $response){
	echo 'CUSTOMERS';
});