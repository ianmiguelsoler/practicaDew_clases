<?php
// Incluir archivos de clases
include_once "Class/Usuario.php";
include_once "Class/Enum/TipoUsuario.php";
include_once "Class/Telefono.php";
include_once "Class/Cliente.php";

use Class\Usuario;
use Class\Enum\TipoUsuario;
use Class\Telefono;
use Class\Cliente;

// Crear una instancia de Usuario
$usuario = new Usuario();

// Configurar el usuario y reservas
$arrayReservas = $usuario->getReservas();
$arrayReservas[] = "Hola";
$usuario->setReservas($arrayReservas);
$usuario->reservas[] = "adios";

// Configurar el perfil de usuario
$usuario->setUsername("charlie")
    ->setNombre("ian")
    ->setApellidos("Miguel Soler")
    ->setDni("12345678X");

$usuario->setTipo(\Class\Enum\TipoUsuario::ADMIN);

// Añadir un teléfono
$telefono = new Telefono("+34", "456123789");
$usuario->telefonos[] = $telefono;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hook</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body class="bg-black muli">
<nav class="w-100pc flex flex-column md-flex-row md-px-10 py-5 bg-black">
    <div class="flex justify-between">
        <a href="#" class="flex items-center p-2 mr-4 no-underline">
            <img class="max-h-l2 w-auto" src="assets/images/logo.png" />
        </a>
        <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
           class="flex items-center ml-auto md-hidden indigo-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
            <i data-feather="menu"></i>
        </a>
    </div>
    <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
        <a href="#home" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Home</a>
        <a href="#features" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Features</a>
        <a href="#pricing" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Pricing</a>
        <a href="#blog" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Blog</a>
        <a href="#" class="button bg-white black fw-600 no-underline mx-5">Register</a>
    </div>
</nav>

<!-- hero section -->
<section id="home" class="min-h-100vh flex justify-start items-center">
    <div class="mx-5 md-mx-l5">
        <div class="inline-block br-round bg-indigo-30 indigo-lightest p-2 fs-s2 mb-5">
            <div class="inline-block bg-indigo indigo-lightest br-round px-3 py-1 mr-3 fs-s3">Join Meet Up</div>
            We are coming to Singapore. Learn more…
        </div>
        <div>
            <h1 class="white fs-l3 lh-2 md-fs-xl1 md-lh-1 fw-900 ">
                Welcome, <?php echo $usuario->getNombre(); ?>!
            </h1>

            <div class="br-8 mt-10 inline-flex">
                <input type="text"
                       class="input-lg half bw-0 fw-200 bg-indigo-lightest-10 white ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 min-w-25vw br-r-0"
                       placeholder="Email Address">
                <button
                    class="button-lg bg-indigo-lightest-20 indigo-lightest focus-white fw-300 fs-s3 mr-0 br-l-0">Get
                    Started</button>
            </div>
            <div class="white opacity-20 fs-s3 mt-3">No credit card required</span>
            </div>
        </div>
</section>

<!-- Render more data from PHP -->
<section>
    <h2 class="white">Reservas:</h2>
    <ul class="white">
        <?php foreach($usuario->reservas as $reserva): ?>
            <li><?php echo $reserva; ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<footer class="p-5 md-p-l5 bg-indigo-lightest-10">
    <div class="flex flex-wrap">
        <div class="md-w-25pc mb-10">
            <img src="assets/images/logo.png" class="w-l5" alt="">
            <div class="white opacity-70 fs-s2 mt-4 md-pr-10">
                <p>Información adicional del usuario:</p>
                <ul>
                    <li>Nombre: <?php echo $usuario->getNombre(); ?></li>
                    <li>Teléfono: <?php echo $usuario->telefonos[0]->getNumero(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
