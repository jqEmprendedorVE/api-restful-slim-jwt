<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Obtener todos los clientes
$app->get('/usuarios',function(Request $request, Response $response){
	$response = array();

	$usuarios = Usuarios::all();
	foreach ($usuarios as $u) {
		$response[] = array(
			'idusuario'=>$u->idusuario,
			'idgrupo'=>$u->idgrupo,
			'mailusuario'=>utf8_decode($u->mailusuario),
			'nombreusuario'=>$u->nombreusuario,
			'activacion'=>$u->activacion,
			'fechaactivo'=>$u->fechaactivo,
			'permisos'=>$u->permisos,
			'ultimavisita'=>$u->ultimavisita,
			);
	}

	echo json_encode($response);
});

// Obtener un solo cliente
$app->get('/usuario/{cedula}',function(Request $request, Response $response){
	$cedula = $request->getAttribute('cedula');
	$sql = "select * from usuarios where nombreusuario=$cedula";

	$response = array();

	$usuarios = Usuarios::all(array(
		'conditions'=>"nombreusuario=$cedula"
		));
	foreach ($usuarios as $u) {
		$response[] = array(
			'idusuario'=>$u->idusuario,
			'idgrupo'=>$u->idgrupo,
			'mailusuario'=>utf8_decode($u->mailusuario),
			'nombreusuario'=>$u->nombreusuario,
			'activacion'=>$u->activacion,
			'fechaactivo'=>$u->fechaactivo,
			'permisos'=>$u->permisos,
			'ultimavisita'=>$u->ultimavisita,
			);
	}

	echo json_encode($response);
});