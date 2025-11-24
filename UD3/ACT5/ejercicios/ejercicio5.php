<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto con Bootstrap</title>
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

<body class="d-flex flex-column h-100">

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
                        <a class="nav-link btn btn-primary me-2 text-white" href="ejercicio1.php">Variables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary me-2 text-white" href="ejercicio2.php">Clases y
                            Funciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success me-2 text-white" href="ejercicio3.php">Condiciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning me-2 text-white" href="ejercicio4.php">Bucles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger me-2 text-white" href="#">Formularios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary me-2 text-white" href="ejercicio6.php">Sesiones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary me-2 text-white" href="ejercicio7.php">Cookies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success me-2 text-white" href="../ejercicio1.3.php">Trabajo Final</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
            </path>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
            </path>
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
            </path>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
            </path>
        </symbol>
    </svg>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" aria-hidden="true">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" aria-hidden="true">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" aria-hidden="true">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" aria-hidden="true">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" aria-hidden="true">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" aria-hidden="true">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" aria-hidden="true">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container py-4">
            <section class="container">
                <h2 class="mb-4">5- Formularios</h2>

                <!-- Ejercicio 5.1 -->
                <article id="ejer4_1" class="card mb-4 shadow-sm bg-light rounded">
                    <div class="card-body">
                        <h3 class="card-title">Ejercicio 5.1</h3>
                        <h5 class="fw-bold mb-3">Descripción:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                🔢 Crea un sistema básico de inicio de sesión que permita al usuario introducir un
                                nombre de usuario y una clave para validar el acceso. El formulario y la validación se
                                realizarán utilizando dos archivos PHP.
                            </li>
                            <li class="list-group-item">
                                ⚖️ El primero mostrará el formulario con los campos usuario (tipo texto) y clave (tipo
                                contraseña), junto con un botón para enviar los datos al segundo archivo usando el
                                método POST.
                            </li>
                            <li class="list-group-item">
                                🔢 El segundo recibirá los datos enviados, los comparará con valores predefinidos (por
                                ejemplo: usuario = imaw, clave = 1234) y mostrará un mensaje en función de si el inicio
                                de sesión es correcto o no.
                            </li>
                            <li class="list-group-item">
                                🔢 Si el usuario y la clave son correctos, mostrar un mensaje de bienvenida y un botón
                                para volver al primer archivo PHP.
                            </li>

                            <br>
                            <h2 class="mb-4">Iniciar sesión</h2>
                            <!--Iniciamos el action con la dirección del php de validación-->
                            <form action="validacion.php" method="POST" class="p-3 bg-white rounded shadow-sm"
                                style="max-width: 400px;">
                                <!--Se utiliza el método post para que la información sea segura-->
                                <label class="form-label fw-bold">Usuario:</label><br>
                                <input type="text" name="usuario" class="form-control"
                                    placeholder="Introduce Nombre de Usuario" required><br><br>

                                <label>Clave:</label><br>
                                <input type="password" name="clave" class="form-control"
                                    placeholder="Introduce Contraseña" required><br><br>

                                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                            </form>


                    </div>
                </article>

                <!-- Ejercicio 5.2 -->
                <article id="ejer4_2" class="card mb-4 shadow-sm bg-light rounded">
                    <div class="card-body">
                        <h3 class="card-title">Ejercicio 5.2</h3>

                        <h5 class="fw-bold mb-3">Descripción:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                💡El objetivo de este ejercicio es crear una calculadora web basada en un formulario que
                                permita al usuario introducir dos números y seleccionar una operación aritmética para
                                realizar entre ellos (suma, resta, multiplicación o división).</li>.
                            <li class="list-group-item">
                                💡El formulario y la lógica de procesamiento deben estar en el mismo archivo PHP, de
                                modo que al enviar el formulario la página se recargue mostrando el resultado en el
                                propio formulario.</li>.
                            <li class="list-group-item">
                                El formulario debe contener lo siguiente:
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Dos campos numéricos para introducir los operandos.</li>
                                    <li class="list-group-item">Un grupo de botones de opción (radio button) para elegir
                                        la operación a realizar (+,-,*,/).</li>
                                    <li class="list-group-item">Un botón para ejecutar la operación.</li>
                                    <li class="list-group-item">Un campo de solo lectura que muestre el resultado.</li>
                                </ul class="list-group-item">
                            </li>
                            <li class="list-group-item">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Si un operando está vacío se considerará como 0.</li>
                                    <li class="list-group-item">Si la operación es división y el segundo operando es 0,
                                        debe mostrarse el mensaje “No se puede dividir entre 0”.</li>
                                    <li class="list-group-item">En cualquier otro caso, mostrar el resultado numérico de
                                        la operación.</li>
                                </ul>
                            </li>
                            <li>
                                La opción de operación seleccionada debe mantenerse marcada después de enviar el
                                formulario (persistencia de selección).

                            </li>
                            <li>
                                El valor de los operandos introducidos también debe conservarse tras el envío del
                                formulario.
                            </li>
                        </ul>
                        <br />

                        <?php


                        // Recibir datos del formulario (este es el formato en el que viene los datos del formulario $_POST['usuario'])
                        // ?? sirve para decir que si el usuario no es nulo que se use$_POST['usuario']
                        //si no que se use ''
                        //Si se pone algo entre comilla se usa ese valor por defecto
                        
                        $operador1 = $_GET['operador1'] ?? '0';
                        $operador2 = $_GET['operador2'] ?? '0';
                        $operando = $_GET['operando'] ?? '';
                        $resultado = null;

                        //esto sirve para que solo se realiace este partado si se realiza el get
                        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

                            if ($operando == '+') {

                                $resultado = $operador1 + $operador2;

                            } else if ($operando == '-') {

                                $resultado = $operador1 - $operador2;

                            } else if ($operando == '*') {

                                $resultado = $operador1 * $operador2;
                            } else if ($operando == '/') {

                                if ($operador2 == "0") {

                                    $resultado = "No se puede dividir entre 0";
                                } else {
                                    $resultado = $operador1 / $operador2;
                                }
                            }
                        }

                        ?>


                        <form action="ejercicio5.php" method="GET" class="p-3 bg-white rounded shadow-sm"
                            style="max-width: 400px;">
                            <!--Se utiliza el método post para que la información sea segura-->
                            <label class="form-label fw-bold">Operando 1:</label><br>

                            <!--Para que se recuerde lo que hayas puesto en el formulario se debe poner htmlspecialchars($operador2) en el value (dentro de un php)-->
                            <input type="text" name="operador1" class="form-control" placeholder="Operador 1"
                                value="<?= htmlspecialchars($operador1) ?>"><br><br>

                            <label>Operando 2:</label><br>
                            <input type="text" name="operador2" class="form-control" placeholder="Operador 2"
                                value="<?= htmlspecialchars($operador2) ?>"><br><br>

                            <input name="operando" type="radio" value="+" <?= $operando == '+' ? 'checked' : '' ?>>
                            <input name="operando" type="radio" value="-" value="+" <?= $operando == '-' ? 'checked' : '' ?>>
                            <input name="operando" type="radio" value="*" value="+" <?= $operando == '*' ? 'checked' : '' ?>>
                            <input name="operando" type="radio" value="/" value="+" <?= $operando == '/' ? 'checked' : '' ?>><br><br>

                            <button type="submit" class="btn btn-primary w-100">Operar</button>



                        </form>

                    <!--Si $resultado no es nulo, aparece esto en el formulario-->

                        <p><?php if ($resultado !== null) {
                            echo "<div><p>".$resultado."<p/></div>";
                        } ?>



                    </div>
                </article>

                <!-- Ejercicio 4.3 -->
                <article id="ejer4_3" class="card mb-4 shadow-sm bg-light rounded">
                    <div class="card-body">

                        <h3 class="card-title">Ejercicio 4.3</h3>

                        <h5 class="fw-bold mb-3">Descripción:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                🎨 Crea una tabla HTML con una sola fila de tipo cabecera.
                            </li>
                            <li class="list-group-item">
                                🔡 Mete en un array los nombres de los días de la semana.
                            </li>
                            <li class="list-group-item">
                                🔁 Mete en las celdas de la tabla los nombres de los días de la semana que están
                                almacenados en el array.
                            </li>
                        </ul>
                        <br />

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center align-middle">
                                <thead class="table-primary">
                                    <tr>

                                        <?php

                                        #Definir un array con dias de la semana
                                        $Semana = [
                                            "Lunes",
                                            "Martes",
                                            "Miércoles",
                                            "Jueves",
                                            "Viernes",
                                            "Sábado",
                                            "Domingo"
                                        ];
                                        //a la variable día le asignamos le array
                                        $dias = $Semana;
                                        //este buble es el que se utiliza para los array, recorre toda la lista
                                        foreach ($dias as $dia) {
                                            echo "<th scope='col'>$dia</th>";
                                        }
                                        ?>
                                    </tr>
                                </thead>
                            </table>

                        </div>
                </article>

                <!-- Ejercicio 4.4 -->
                <article id="ejer4_4" class="card mb-4 shadow-sm bg-light rounded">
                    <div class="card-body">
                        <h3 class="card-title">Ejercicio 4.4</h3>
                        <h5 class="fw-bold mb-3">Descripción:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                🟣 Crea una tabla de 10 filas y 8 columnas.
                            </li>
                            <li class="list-group-item">
                                ⚔️ El contenido numérico de cada celda será la multiplicación entre el número de fila y
                                el número de columna en las que está la celda.
                            </li>
                            <li class="list-group-item">
                                ❤️ El diseño de las celdas variará en función de si el valor de la celda es par o impar.
                            </li>
                        </ul>

                        <br />

                        <table class="table table-bordered text-center shadow-sm">
                            <thead class="table-primary">
                                <tr>
                                    <th colspan="8">Tabla de Multiplicaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tabla = [];

                                for ($fila = 1; $fila <= 10; $fila++) {
                                    for ($columna = 1; $columna <= 8; $columna++) {
                                        $tabla[$fila][$columna] = $fila * $columna; // Guardamos el valor
                                    }
                                }
                                // Recorremos el array
                                foreach ($tabla as $fila) {
                                    echo '<tr>';

                                    foreach ($fila as $valor) {
                                        // Diferenciar pares e impares (los estilos)
                                        if ($valor % 2 == 0) {
                                            $estilo = 'background-color: #d1e7dd; font-weight: bold;'; // verde claro
                                        } else {
                                            $estilo = 'background-color: #f8d7da;'; // rojo claro
                                        }

                                        echo "<td style='$estilo'>$valor</td>";
                                    }
                                    echo '</tr>';
                                }


                                ?>
                            </tbody>
                        </table>
                    </div>
                </article>

                <article id="ejer4_5" class="card mb-4 shadow-sm bg-light rounded">
                    <div class="card-body">
                        <h3 class="card-title">Ejercicio 4.5</h3>
                        <h5 class="fw-bold mb-3">Descripción:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                🟣 Basándote en lo definido en el ejercicio 4.4, muestra por pantalla un tablero de
                                ajedrez como el que aparece a continuación:
                            </li>
                        </ul>

                        <br />

                        <div class="d-inline-block border  border-dark">
                            <?php
                            // Bucle principal que genera las 8 filas del tablero
                            for ($fila = 1; $fila <= 8; $fila++) {

                                // Abre un contenedor <div> que representa una fila del tablero
                                // La clase "d-flex" de Bootstrap permite que las casillas se alineen horizontalmente (en fila)
                                echo '<div class="d-flex">';

                                // Segundo bucle que genera las 8 columnas dentro de cada fila
                                for ($col = 1; $col <= 8; $col++) {

                                    // Calcula el color de la casilla según la posición
                                    // Si la suma de fila + columna es par → casilla negra
                                    // Si es impar → casilla blanca
                                    $color = (($fila + $col) % 2 == 0) ? "bg-dark" : "bg-light";

                                    // Genera una casilla del tablero (un cuadrado)
                                    // - "border border-dark": agrega un borde negro alrededor
                                    // - "$color": será "bg-dark" (negra) o "bg-light" (blanca)
                                    // - "ratio ratio-1x1": hace que el div sea cuadrado (1:1)
                                    // - "style='width: 50px;'": fija el ancho de cada casilla
                                    echo "<div class='border border-dark $color ratio ratio-1x1' style='width: 50px;'></div>";
                                }

                                // Cierra el contenedor de la fila actual antes de pasar a la siguiente
                                echo '</div>';
                            }
                            ?>

                        </div>


                    </div>
                </article>

            </section>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
        <div class="container">
            <span class="text-body-secondary">IMAW - Ciudad Jardin</span>
        </div>
    </footer>
    <script src="../js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
</body>

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