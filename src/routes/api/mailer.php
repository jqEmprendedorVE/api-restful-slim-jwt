<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Mailgun\Mailgun;

// Obtener todos los clientes
$app->post('/mailer/messages',function(Request $request, Response $response){
	$mgClient = new Mailgun('key-f76c8e9de1f0a5fbb71d7bd7e3bbc742');
	$domain = "jqemprendedorve.com";

	$result = $mgClient->sendMessage($domain, array(
	    'from'    => 'Usuario emocionado <julioq_01@hotmail.com>',
	    'to'      => 'Julio Quintana <jquintana1801@gmail.com>',
	    'subject' => 'Hola desde API',
	    'text'    => 'Testing some Mailgun awesomness!'
	));

	echo json_encode($result);
});