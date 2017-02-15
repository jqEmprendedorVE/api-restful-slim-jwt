<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Firebase\JWT\JWT;

$app->get('/',function(Request $request, Response $response){
	echo json_encode(array(
		'mensaje' => 'ruta sin metodo asignado' 
		));
});

// Obtener todos los clientes
$app->post('/login',function(Request $request, Response $response){
	$cedula = $request->getParam('cedula'); 
	$password = $request->getParam('password');

	$usuario = Usuarios::login($cedula,$password);
	if($usuario!=false){
		$token = [
            "iss" => "clicsoka",
            "iat" => time(), //time issued
            "exp" => time() + 3600 * 4, //keep token valid for 4 hours,
            "user_id" => $usuario->nombreusuario
        ];

        //return JWT::encode($token, $this->key);

		echo json_encode(array(
			'code'=>0,
			'success'=>'Usuario validado con nombre: '.$usuario->nombreusuario,
			'token'=>JWT::encode($token, KEY)
			));
	}else{
		echo json_encode(array(
			'error'=>'Credenciales ivalidas para hacer login'
			));
	}
});