<?php

date_default_timezone_set('America/Sao_Paulo');

// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json");

require_once '../vendor/autoload.php';

$router = new SimpleApi\Router;
$response = new SimpleApi\Response;

$request = $router->handler();
$rowsAffected = ( isset($request['rowsAffected']) ? $request['rowsAffected'] : 0 );
$results = ( isset($request['results']) ? $request['results'] : array() );

$response->msg($request['status'], $request['error'], $rowsAffected, $results);
