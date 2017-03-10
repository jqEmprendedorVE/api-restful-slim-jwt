<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Mailgun\Mailgun;

// Obtener todos los clientes
$app->get('/mailer/messages',function(Request $request, Response $response){
	$mgClient = new Mailgun('key-f76c8e9de1f0a5fbb71d7bd7e3bbc742');
	$domain = "jqemprendedorve.com";

	$result = $mgClient->sendMessage($domain, array(
	    'from'    => 'Usuario emocionado <julioq_01@hotmail.com>',
	    'to'      => 'Julio Quintana <jquintana1801@gmail.com>',
	    'subject' => 'Hola desde API',
	    'text'    => 'Testing some Mailgun awesomness!'
	));

	var_dump($result);

	/*$response = array();

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

	echo json_encode($response);*/
});