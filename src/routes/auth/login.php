<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/',function(Request $request, Response $response){
	echo json_encode(array(
		'mensaje' => 'ruta sin metodo asignado' 
		));
});
// Obtener todos los clientes
$app->get('/login',function(Request $request, Response $response){
	echo json_encode(array(
		'mensaje' =>  'Preparado para hacer login'
		));
});