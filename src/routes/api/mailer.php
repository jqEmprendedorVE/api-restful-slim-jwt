<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Mailgun\Mailgun;

// Obtener todos los clientes
$app->post('/mailer/messages/{accion}',function(Request $request, Response $response){
	$accion = $request->getAttribute('accion');
	$p = $request->getQueryParams();
	$from = 'Contacto jqEmprendedorVE <postmaster@jqemprendedorve.com>';
	$cc = $p['name'].' <'. $p['email'] .'>';
	$to = 'Julio Quintana <jquintana1801@gmail.com>';
	$text = $p['text'];

	echo $from;
	//return;

	$mgClient = new Mailgun('key-f76c8e9de1f0a5fbb71d7bd7e3bbc742');
	$domain = "jqemprendedorve.com";

	$result = array();
	switch ($accion) {
		case 'descuento':
			$result = $mgClient->sendMessage($domain, array(
			    'from'    => $from,
			    'to'      => $to,
			    'cc'	  => $cc,
			    'subject' => 'Gracias, ud ha recibido un 30% en su proximo proyecto',
			    'text'    => $text
			));
			break;
		case 'contactame':
			//$result = array('Mensaje' => 'Datos de prueba');
			$result = $mgClient->sendMessage($domain, array(
			    'from'    => $from,
			    'to'      => $to,
			    'cc'	  => $cc,
			    'subject' => 'Consulta para jqEmprendedorVE',
			    'text'    => $text
			));
			break;		
	}

	echo json_encode($result);
});