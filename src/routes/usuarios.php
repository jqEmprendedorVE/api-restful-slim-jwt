<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;


// Obtener todos los clientes
$app->get('/api/usuarios',function(Request $request, Response $response){
	$sql = "select * from usuarios";

	try {
		$db = new db();

		$db = $db->connect();


		$stmt = $db->query($sql);

		$usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);

		$response = array();
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

		$db = null;

		echo json_encode($response);
		
	} catch (PDOException $e) {
		echo '{"error": {"text":'.$e->getMessage().'}}';
	}
});

// Obtener un solo cliente
$app->get('/api/usuario/{cedula}',function(Request $request, Response $response){
	$cedula = $request->getAttribute('cedula');
	$sql = "select * from usuarios where nombreusuario=$cedula";

	try {
		$db = new db();

		$db = $db->connect();


		$stmt = $db->query($sql);

		$usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);

		$response = array();
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

		$db = null;

		echo json_encode($response);
		
	} catch (PDOException $e) {
		echo '{"error": {"text":'.$e->getMessage().'}}';
	}
});