<?php
include_once "Class/Usuario.php";
include_once "Class/Enum/TipoUsuario.php";
use Class\Usuario;

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

print_r($usuario);