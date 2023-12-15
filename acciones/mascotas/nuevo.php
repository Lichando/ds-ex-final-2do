<?php

require_once "../../modelo/mascota.php";
require_once "../mascotas/responses/nuevoResponse.php";
require_once "../mascotas/request/nuevoRequest.php";
require_once "../../configuracion/database.php";

header('Content-Type: application/json');
$json = file_get_contents('php://input',true);
$req = json_decode($json);

$ma = new Mascota;
$ma->Especie = $req->Especie;
$ma->Nombre = $req->Nombre;
$ma->Raza = $req->Raza;

$ma->Agregar();

$resp = new nuevoResponse;
$resp->IsOk= True;

echo json_encode($resp)
?>
