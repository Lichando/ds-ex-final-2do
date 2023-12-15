<?php

require_once "../../modelo/mascota.php";
require_once "../mascotas/responses/consultarCantidadResponse.php";
require_once "../../configuracion/database.php";
header('Content-Type: application/json');


$resp=new cantMascotas;


$resp->listMascotas=Mascota::BuscarTodas();

$contador=0;

foreach ($resp->listMascotas as $c) {
    $contador= $contador+1;
}

$resp->cantidadMascotas= $contador;


echo json_encode($resp->cantidadMascotas);



