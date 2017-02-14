<?php

$mw_jwt = function ($request, $response, $next){
	// Validar JWT
	// 1. descomprension
	// 2. vigencia del token
	// 3. hacer next de la operacion
	$response->getBody()->write('');
	$response = $next($request, $response);

	return $response;
};