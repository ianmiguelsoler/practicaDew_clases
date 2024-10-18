<?php
include_once "Class/Usuario.php";
include_once "Class/Enum/TipoUsuario.php";
include_once "Class/Telefono.php";
include_once "Class/Cliente.php";

use Class\Usuario;
use Class\Enum\TipoUsuario;
use Class\Telefono;
use Class\Cliente;

echo "Estos son los ejemplos orientados a objetos en PHP";


$usuario = new Usuario();

$arrayReservas=$usuario->getReservas();
$arrayReservas[]="Hola";

$usuario->setReservas($arrayReservas);
$usuario->reservas[]="adios";

echo "<br>";
print_r($usuario->reservas);

$usuario
    ->setUsername("charlie")
    ->setNombre("Carlos")
    ->setApellidos("picapiedras")
    ->setDni("12345678X");

$usuario->setTipo(\Class\Enum\TipoUsuario::ADMIN);

//print_r($usuario);

$telefono = new Telefono("+34","456123789");
$usuario->telefonos[] = $telefono;

echo "<br>";
//print_r($usuario->telefonos[0]);

var_dump($usuario);


