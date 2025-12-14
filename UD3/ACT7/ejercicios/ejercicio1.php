<?php
// Ejercicio 1

// Crear una variable con tu nombre
$nombre = "Raúl";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        #miCarrusel img {
            max-height: 300px;
            object-fit: cover;
        }
    </style>

</head>


<body>

    <!-- Header -->
    <header class="bg-light text-center p-4">
        <div class="d-flex justify-content-center">
            <img src="../img/php_logo.png" alt="Imagen encabezado" class="img-fluid rounded shadow"
                style="max-height: 120px; width: auto;">
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Inicio</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary me-2 text-white" href="#">Variables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary me-2 text-white" href="ejercicio2.php">Clases y Funciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success me-2 text-white" href="ejercicio3.php">Condiciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning me-2 text-white" href="ejercicio4.php">Bucles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger me-2 text-white" href="ejercicio5.php">Formularios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary me-2 text-white" href="ejercicio6.php">Sesiones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary me-2 text-white" href="ejercicio7.php">Cookies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success me-2 text-white" href="ejercicio3.php">Trabajo Final</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="card shadow-sm p-4">
            <h3 class="card-title text-primary"><strong>1-Tipos de variables</strong></h3>
            <p class="card-subtitle mb-2 text-success"><b>Ejercicio 1.1</b></p>
            <p class="card-text">Hola <strong><?php echo $nombre; ?></strong>, Bienvenido</p>
        </div>
    </div>
    <?php
// Ejercicio 1.2

// Crear variable a y b
$a = 8;
$b = 3;
?>
    <div class="container my-5">
        <div class="card shadow-sm p-4">
            <h1 class="card-title text-success"><strong>Ejercicio 1.2</strong></h1>
            <div class="card-body mt-3">
    <!--resultado de operaciones en PHP-->
                <p class="card-text">a = <?php echo $a; ?></p>
                <p class="card-text">b = <?php echo $b; ?></p>
                <p class="card-text">a + b = <?php echo $a + $b; ?></p>
                <p class="card-text">a - b = <?php echo $a - $b; ?></p>
                <p class="card-text">a / b = <?php echo $a / $b; ?></p>
                <p class="card-text">El resto de dividir a entre b es <?php echo $a % $b; ?></p>
            </div>
        </div>
    </div>

    <?php
// Ejercicio 1.3

// Crea lista de meses (array)
$meses = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
];
// Crea lista de meses con sus correspondientes números
$mes = [
    "Enero" => 1,
    "Febrero" => 2,
    "Marzo" => 3,
    "Abril" => 4,
    "Mayo" => 5,
    "Junio" => 6,
    "Julio" => 7,
    "Agosto" => 8,
    "Septiembre" => 9,
    "Octubre" => 10,
    "Noviembre" => 11,
    "Diciembre" => 12
];

$mes = 4
?>

 <div class="container my-5">
        <div class="card shadow-sm p-4">
            <h1 class="card-title text-warning"><strong>Ejercicio 1.3</strong></h1>
            <div class="card-body mt-3">
                <p class="card-text">
    <!--el mes 4 es igual a mayo-->
                    El mes <b><?php echo $mes; ?></b> es <b><?php echo $meses[$mes - 1]; ?></b>
                </p>
            </div>
        </div>
    </div>
    <?php
// Ejercicio 1.4

// Crea lista de coches
$coches = [
    "Renault",
    "Seat",
    "Audi",
    "Mercedes",
];
// Crea funcion aleatoria
function aleatorio() {

    $bola = rand(0,3);
    
    return $bola;
}

?>

<div class="container my-5">

    <<!--cada vez que se cargue la página saldrá un coche diferente-->
        <div class="card shadow-sm p-4">
            <h1 class="card-title text-info"><strong>Ejercicio 1.4</strong></h1>
            <p class="card-text mt-3">
                El coche que te ha tocado es un <b><?php echo $coches[aleatorio()]; ?></b>, ¡Felicidades!
            </p>
        </div>
    </div>
<?php
// Ejercicio 1.5

// Crea lista (array)
$paisajes = [
    "Imagen_otra_1.jpg",
    "Imagen_otra_3.jpg",
    "Imagen_otra_4.jpg",
    "Imagen_otra_2.jpg"
];

// Crea funcion aleatoria
function aleatorio1() {

    $imagen = rand(0,3);
    
    return $imagen;
}

?>

<div class="container my-5">
    <!--cada vez que se cargue la página saldrá una foto distinta-->
        <div class="card shadow-sm p-4">
            <h1 class="card-title text-secondary"><strong>Ejercicio 1.5</strong></h1>
            <div class="card-body mt-3 text-center">
                <img src="../img/<?php echo $paisajes[aleatorio1()]; ?>" 
                    alt="<?php echo $paisajes[aleatorio1()]; ?>" 
                    class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>


</body>
<footer class="footer mt-auto py-3 bg-body-tertiary">
      <div class="container">
        <span class="text-body-secondary"
          >IMAW - Ciudad Jardin</span
        >
      </div>
    </footer>

</html>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: #0000001a;
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow:
          inset 0 0.5em 1.5em #0000001a,
          inset 0 0.125em 0.5em #00000026;
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .bd-mode-toggle .bi {
        width: 1em;
        height: 1em;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>