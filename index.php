<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <title>PHP</title>
    </head>
    <body>

    <!-- ======= Encabezado Section ======= -->
    <section class="encabezado">
        <div class="container text-center">
            <div class="col-md-12 titulo-text">
                <h1 >
                    APRENDIENDO PHP
                </h1>

                <p>
                    10 Ejemplos PHP
                </p>
                <a class="btn btn-full bg-danger" href="#php">INICIAR</a>
            </div>
        </div>
    </section><!-- End Encabezado -->
    <!-- Nav tabs -->
    <section id="php">
        <div class="container my-5">
            <ul class="nav nav-tabs navbar-collapse justify-content-center font-weight-bold" role="tablist" >
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Arreglos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Matrices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Funciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu3">Bucles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu4">Operadores</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- ARRAYS -->
                <div id="home" class="container tab-pane active"><br>
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top my-4">
                            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left text-danger"></i></a>
                            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right text-danger"></i></a>
                        </div>
                        <!--/.Controls-->

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example" data-slide-to="500"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active my-3">
                                <div class="row">
                                    <div class="col-md-12 px-5">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">01</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">Comparar Arrays</h4>
                                                        <p class="text-justify">Calcula la diferencia entre arrays, compara array1 con uno o más arrays y devuelve los valores de array1 que no estén presentes en ninguno de los otros arrays.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$array1 = array("a" => "verde", "rojo", "azul", "rojo");
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$array2 = array("b" => "verde", "amarillo", "rojo");
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$resultado = array_diff($array2, $array1);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;var_dump($resultado);
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <?php
                                                                        $array1    = array("a" => "verde", "rojo", "azul", "rojo");
                                                                        $array2    = array("b" => "verde", "amarillo", "rojo");
                                                                        $resultado = array_diff($array2, $array1);
                                                                        var_dump($resultado);
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item my-3">
                                <div class="col-md-12 px-5">
                                    <div class="row">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">02</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">Unir Arrays</h4>
                                                        <p class="text-justify">Crea un array usando los valores del array keys como las keys y los valores del array values como los valores correspondientes.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$animales = array('perro', 'gato', 'leon');
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$nombres = array('Jerry', 'Lord', 'Jesus');
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$resultado = array_combine($animales, $nombres);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;var_dump($resultado);
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <?php
                                                                        $animales = array('perro', 'gato', 'leon');
                                                                        $nombres = array('Jerry', 'Lord', 'Jesus');
                                                                        $resultado = array_combine($animales, $nombres);
                                                                        var_dump($resultado);
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second slide-->
                        </div>
                    <!--/.Slides-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>

                <!-- MATRICES -->
                <div id="menu1" class="container tab-pane fade"><br>
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example1" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top my-4">
                            <a class="btn-floating" href="#multi-item-example1" data-slide="prev"><i class="fas fa-chevron-left text-danger"></i></a>
                            <a class="btn-floating" href="#multi-item-example1" data-slide="next"><i class="fas fa-chevron-right text-danger"></i></a>
                        </div>
                        <!--/.Controls-->

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example1" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example1" data-slide-to="500"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active my-3">
                                <div class="row">
                                    <div class="col-md-12 px-5">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">03</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">Ordenar Matrices</h4>
                                                        <p class="text-justify">Se usa para ordenar varios arrays al mismo tiempo, o un array multidimensional por una o más dimensiones.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$data[] = array( "nombre" => "Luis", "apellido" => "González", "edad" => 20 );
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$data[] = array( "nombre" => "María", "apellido" => "Ares", "edad" => 30 );
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$data[] = $data[] = array( "nombre" => "José", "apellido" => "González", "edad" => 19 );
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$data[] = $data[] = array( "nombre" => "Amelia", "apellido" => "Montoto", "edad" => 35 );
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$data[] = $data[] = array( "nombre" => "Ana", "apellido" => "Ramírez", "edad" => 30 );
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Ordenado por apellido ascendente:";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;foreach ($data as $clave => $fila) {
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$orden1[$clave] = $fila['apellido'];
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;array_multisort($orden1, SORT_ASC, $data);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;foreach ($data as $clave => $fila) {
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo $fila['apellido']." ".$fila['nombre']." - ". $fila['edad']."";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <?php
                                                                        $data[] = array( "nombre" => "Luis", "apellido" => "González", "edad" => 20 );
                                                                        $data[] = array( "nombre" => "María", "apellido" => "Ares", "edad" => 30 );
                                                                        $data[] = array( "nombre" => "José", "apellido" => "González", "edad" => 19 );
                                                                        $data[] = array( "nombre" => "Amelia", "apellido" => "Montoto", "edad" => 35 );
                                                                        $data[] = array( "nombre" => "Ana", "apellido" => "Ramírez", "edad" => 30 );

                                                                        echo "Ordenado por apellido ascendente:"."</br>";
                                                                        foreach ($data as $clave => $fila) {
                                                                            $orden1[$clave] = $fila['apellido'];
                                                                        }

                                                                        array_multisort($orden1, SORT_ASC, $data);

                                                                        foreach ($data as $clave => $fila) {
                                                                            echo $fila['apellido']." ".$fila['nombre']." - ". $fila['edad'].""."</br>";
                                                                        }
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item my-3">
                                <div class="col-md-12 px-5">
                                    <div class="row">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">04</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">Unir Arrays</h4>
                                                        <p class="text-justify">Crea un array usando los valores del array keys como las keys y los valores del array values como los valores correspondientes.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$equipo_futbol = array(array("Rooney","Chicharito","Gigs"),
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array("Suarez"),
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array("Torres","Terry","Etoo"));
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;foreach($equipo_futbol as $equipo){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "En este equipo juegan: ";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach($equipo as $jugador){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo $jugador."";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lt/br>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;}
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <?php
                                                                        $equipo_futbol = array(array("Rooney","Chicharito","Gigs"),
                                                                                                array("Suarez"),
                                                                                                array("Torres","Terry","Etoo"));

                                                                        foreach($equipo_futbol as $equipo){
                                                                            echo "En este equipo juegan: ";
                                                                            foreach($equipo as $jugador){
                                                                                echo $jugador ." ";
                                                                            }
                                                                            echo "</br>";
                                                                        }
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second slide-->
                        </div>
                    <!--/.Slides-->
                    </div>
                </div>

                <!-- FUNCIONES -->
                <div id="menu2" class="container tab-pane fade"><br>
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top my-4">
                            <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fas fa-chevron-left text-danger"></i></a>
                            <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i class="fas fa-chevron-right text-danger"></i></a>
                        </div>
                        <!--/.Controls-->

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example2" data-slide-to="500"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active my-3">
                                <div class="row">
                                    <div class="col-md-12 px-5">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">05</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">Retornar una función - Array</h4>
                                                        <p class="text-justify">Una función nos puede retornar solo un valor, así como también puede devolver cualquier tipo de valor, como un array.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;function sumar_restar($num1, $num2){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$resultado = array(
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'suma' => $num1 + $num2,
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'resta' => $num1 - $num2
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $resultado;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$resultado_de_suma_resta = sumar_restar(20, 7);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "La suma es:".$resultado_de_suma_resta['suma']."\n";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "La resta es:".$resultado_de_suma_resta['resta'];
                                                                        ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <?php
                                                                        function sumar_restar($num1, $num2){
                                                                            $resultado = array(
                                                                                'suma' => $num1 + $num2,
                                                                                'resta' => $num1 - $num2
                                                                            );
                                                                            return $resultado;
                                                                        }
                                                                        $resultado_de_suma_resta = sumar_restar(20, 7);
                                                                        echo "La suma es:".$resultado_de_suma_resta['suma']."</br>";
                                                                        echo "La resta es:".$resultado_de_suma_resta['resta'];
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item my-3">
                                <div class="col-md-12 px-5">
                                    <div class="row">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">06</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">Funciones dentro de funciones</h4>
                                                        <p class="text-justify">Dentro de una función se puede invocar o llamar más funciones con el fin de ahorrar líneas de código.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;function sumar($num1, $num2){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$resultado = $num1 + $num2;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $resultado;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;function verificarSiEsParoImpar($num){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($num % 2 == 0){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "Par";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "Impar";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;function Operacion($num1, $num2){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$suma = sumar($num1, $num2);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$res = verificarSiEsParoImpar($suma);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo("La suma de: ". $num1." + ".$num2." da como resultado un número ".$res);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;Operacion(10,4);
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <?php
                                                                        function sumar($num1, $num2){
                                                                            $resultado = $num1 + $num2;
                                                                            return $resultado;
                                                                        }
                                                                        function verificarSiEsParoImpar($num){
                                                                            if($num % 2 == 0){
                                                                                return "Par";
                                                                            }else{
                                                                                return "Impar";
                                                                            }
                                                                        }
                                                                        function Operacion($num1, $num2){
                                                                            $suma = sumar($num1, $num2);
                                                                            $res = verificarSiEsParoImpar($suma);
                                                                            echo("La suma de: ". $num1." + ".$num2." da como resultado un número ".$res);
                                                                        }
                                                                        Operacion(10,4);
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second slide-->
                        </div>
                    <!--/.Slides-->
                    </div>
                </div>

                <!-- BUCLES -->
                <div id="menu3" class="container tab-pane fade"><br>
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example3" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top my-4">
                            <a class="btn-floating" href="#multi-item-example3" data-slide="prev"><i class="fas fa-chevron-left text-danger"></i></a>
                            <a class="btn-floating" href="#multi-item-example3" data-slide="next"><i class="fas fa-chevron-right text-danger"></i></a>
                        </div>
                        <!--/.Controls-->

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example3" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example3" data-slide-to="500"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active my-3">
                                <div class="row">
                                    <div class="col-md-12 px-5">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">07</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">While</h4>
                                                        <p class="text-justify">Ingresar las notas de 5 estudiantes con 4 notas y definir si aprobó o reprobó el año.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$est=1;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;while ($est <= 5){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nota1 = rand(0,10);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nota2 = rand(0,10);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nota3 = rand(0,10);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nota4 = rand(0,10);
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Estas son las notas del estudiante: $est".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "1era Nota: $nota1".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "2da Nota: $nota2".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "3era Nota: $nota3".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "4ta Nota: $nota4".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$prom = ($nota1+$nota2+$nota3+$nota4)/4;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Su promedio es: $prom".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($prom >= 7){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Estado: Aprobado".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Estado: Reprobado".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "--------------------------------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$est++;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <?php
                                                                        $est=1;
                                                                        while ($est <= 5){
                                                                            $nota1 = rand(0,10);
                                                                            $nota2 = rand(0,10);
                                                                            $nota3 = rand(0,10);
                                                                            $nota4 = rand(0,10);
                                                                            echo "Estas son las notas del estudiante: $est"."</br>";
                                                                            echo "1era Nota: $nota1"."</br>";
                                                                            echo "2da Nota: $nota2"."</br>";
                                                                            echo "3era Nota: $nota3"."</br>";
                                                                            echo "4ta Nota: $nota4"."</br>";
                                                                            $prom = ($nota1+$nota2+$nota3+$nota4)/4;
                                                                            echo "Su promedio es: $prom"."</br>";
                                                                            if($prom >= 7){
                                                                                echo "Estado: Aprobado"."</br>";
                                                                            }else{
                                                                                echo "Estado: Reprobado"."</br>";
                                                                            }
                                                                            echo "--------------------------------------"."</br>";
                                                                            $est++;
                                                                        }
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item my-3">
                                <div class="col-md-12 px-5">
                                    <div class="row">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">08</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">For</h4>
                                                        <p class="text-justify">Ingresar por teclado un número y se genere su tabla de multiplicación del 1-12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &ltform action="index.php" method="post">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&ltp>Introduzca un número:
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&ltinput type="text" name="val" id="val">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&ltinput type="submit" value="Enviar">&lt/p>
                                                                    &lt/form>
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$num = $_POST['val'];
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "&lttable width='200' border='1'>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "&lttr>&lttd colspan='5'>TABLA DE MULTIPLICAR&lt/td>&lt/tr>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;for($i = 1; $i <= 12; $i++){
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lttr>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lttd>$i&lt/td>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lttd>X&lt/td>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lttd>".$num;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lt/td>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lttd>=&lt/td>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lttd>".$i*$num;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lt/td>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "&lt/tr>";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;}
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "&lt/table>";
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <form action="index.php" method="post">
                                                                        <p>Introduzca un número:
                                                                        <input type="text" name="val" id="val">
                                                                        <input type="submit" value="Enviar"></p>
                                                                    </form>
                                                                    <?php
                                                                        $num = $_POST['val'];
                                                                        echo "<table width='200' border='1'>";
                                                                        echo "<tr><td colspan='5'>TABLA DE MULTIPLICAR</td></tr>";
                                                                        for($i = 1; $i <= 12; $i++){
                                                                            echo "<tr>";
                                                                                echo "<td>$i</td>";
                                                                                echo "<td>X</td>";
                                                                                echo "<td>".$num;
                                                                                echo "</td>";
                                                                                echo "<td>=</td>";
                                                                                echo "<td>".$i*$num;
                                                                                echo "</td>";
                                                                            echo "</tr>";
                                                                        }
                                                                        echo "</table>";
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second slide-->
                        </div>
                    <!--/.Slides-->
                    </div>
                </div>

                <!-- OPERACIONES -->
                <div id="menu4" class="container tab-pane fade"><br>
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example4" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top my-4">
                            <a class="btn-floating" href="#multi-item-example4" data-slide="prev"><i class="fas fa-chevron-left text-danger"></i></a>
                            <a class="btn-floating" href="#multi-item-example4" data-slide="next"><i class="fas fa-chevron-right text-danger"></i></a>
                        </div>
                        <!--/.Controls-->

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example4" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example4" data-slide-to="500"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active my-3">
                                <div class="row">
                                    <div class="col-md-12 px-5">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">09</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">Operadores de Incremento y Decremento</h4>
                                                        <p class="text-justify">La diferencia entre el pre-incremento y el post-incremento es que en el primer caso primero se incrementa la variable y después se utiliza y en el segundo primero se utiliza y después se incrementa. Así mismo sucede con pre-decremento y post-decremento.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Pre-Incremento".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor = 5;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;++$valor.PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "-----------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor1 = 5;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor2 = 10;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo (++$valor1)+($valor2).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "-----------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor = "r0z";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo ++$valor.PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "======================================".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Post-Incremento".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor = 5;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo $valor++.PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo $valor.PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "-----------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor1 = 5;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor2 = 10;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo $res = ($valor1++)+($valor2).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo $res = ($valor1)+($valor2).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "-----------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor = "n";
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo $valor++.PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo $valor.PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "======================================".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Pre-Decremento".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor = 5;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo --$valor.PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "-----------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor1 = 5;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor2 = 10;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo (--$valor1)+($valor2).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "======================================".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Post-Decremento".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor = 5;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo $valor--.PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo $valor.PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "-----------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor1 = 5;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;$valor2 = 10;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo ($valor1--)+($valor2).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo ($valor1)+($valor2).PHP_EOL;
                                                                        ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <?php
                                                                        echo "Pre-Incremento"."</br>";
                                                                        $valor = 5;
                                                                        echo ++$valor."</br>";
                                                                        echo "-----------------"."</br>";
                                                                        $valor1 = 5;
                                                                        $valor2 = 10;
                                                                        echo (++$valor1)+($valor2)."</br>";
                                                                        echo "-----------------"."</br>";
                                                                        $valor = "r0z";
                                                                        echo ++$valor."</br>";
                                                                        echo "======================================"."</br>";
                                                                        echo "Post-Incremento"."</br>";
                                                                        $valor = 5;
                                                                        echo $valor++."</br>";
                                                                        echo $valor."</br>";
                                                                        echo "-----------------"."</br>";
                                                                        $valor1 = 5;
                                                                        $valor2 = 10;
                                                                        echo $res = ($valor1++)+($valor2)."</br>";
                                                                        echo $res = ($valor1)+($valor2)."</br>";
                                                                        echo "-----------------"."</br>";
                                                                        $valor = "n";
                                                                        echo $valor++."</br>";
                                                                        echo $valor."</br>";
                                                                        echo "======================================"."</br>";
                                                                        echo "Pre-Decremento"."</br>";
                                                                        $valor = 5;
                                                                        echo --$valor."</br>";
                                                                        echo "-----------------"."</br>";
                                                                        $valor1 = 5;
                                                                        $valor2 = 10;
                                                                        echo (--$valor1)+($valor2)."</br>";
                                                                        echo "======================================"."</br>";
                                                                        echo "Post-Decremento"."</br>";
                                                                        $valor = 5;
                                                                        echo $valor--."</br>";
                                                                        echo $valor."</br>";
                                                                        echo "-----------------"."</br>";
                                                                        $valor1 = 5;
                                                                        $valor2 = 10;
                                                                        echo ($valor1--)+($valor2)."</br>";
                                                                        echo ($valor1)+($valor2)."</br>";
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item my-3">
                                <div class="col-md-12 px-5">
                                    <div class="row">
                                        <div class="process-box">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="process-step">
                                                            <p class="m-0 p-0 font-weight-bold">Ejemplo</p>
                                                            <h2 class="m-0 p-0">10</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mx-5 ltr">
                                                        <h4 class="card-title text-center">Más Operadores</h4>
                                                        <p class="text-justify">Redondeo, máximo/mínimo, potencias y resto de una división.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top my-3 mb-4 mx-4"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Código</h4>
                                                                <code class="card-text text-justify text-dark" style="white-space: pre-line;">
                                                                    &ltform action="index.php" method="post">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&ltp>Introduzca un número:
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&ltinput type="text" name="val" id="val">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&ltinput type="submit" value="Enviar">&lt/p>
                                                                    &lt/form>
                                                                    &lt?php
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Redondear un número".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "----------------------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Redondear 4.5 = ".round(4.5).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Redondear -4.5 = ".round(-4.5).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Redondear 14.54555 = ".round(14.5, 2).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Redondear 4.5 = ".floor(4.5).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Redondear 4.1 = ".ceil(4.5).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "======================================".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Máximo y Mínimo".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "----------------------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Máximo es = ".max(80, 50, 18.1, 25).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Mínimo es = ".min(80, 50, 18.1, 25).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "======================================".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Potencias".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "----------------------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Potencia de 5^3 = ".pow(5, 3).PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Potencia de 5^3 = ". 5 ** 3 .PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "======================================".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Resto de una División".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "----------------------------".PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Resto de 23 dividido entre 5 = ". 23 % 5 .PHP_EOL;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;echo "Resto de 23 dividido entre 5 = ".fmod(23, 5).PHP_EOL;
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-dark scrollbar-dusty-grass thin square">
                                                            <div class="card-body ">
                                                                <h4 class="card-title ltr">Salida</h4>
                                                                <code class="card-text text-danger">
                                                                    </br>
                                                                    <?php
                                                                        echo "Redondear un número"."</br>";
                                                                        echo "----------------------------"."</br>";
                                                                        echo "Redondear 4.5 = ".round(4.5)."</br>";
                                                                        echo "Redondear -4.5 = ".round(-4.5)."</br>";
                                                                        echo "Redondear 14.54555 = ".round(14.5, 2)."</br>";
                                                                        echo "Redondear 4.5 = ".floor(4.5)."</br>";
                                                                        echo "Redondear 4.1 = ".ceil(4.5)."</br>";
                                                                        echo "======================================"."</br>";
                                                                        echo "Máximo y Mínimo"."</br>";
                                                                        echo "----------------------------"."</br>";
                                                                        echo "Máximo es = ".max(80, 50, 18.1, 25)."</br>";
                                                                        echo "Mínimo es = ".min(80, 50, 18.1, 25)."</br>";
                                                                        echo "======================================"."</br>";
                                                                        echo "Potencias"."</br>";
                                                                        echo "----------------------------"."</br>";
                                                                        echo "Potencia de 5^3 = ".pow(5, 3)."</br>";
                                                                        echo "Potencia de 5^3 = ". 5 ** 3 ."</br>";
                                                                        echo "======================================"."</br>";
                                                                        echo "Resto de una División"."</br>";
                                                                        echo "----------------------------"."</br>";
                                                                        echo "Resto de 23 dividido entre 5 = ". 23 % 5 ."</br>";
                                                                        echo "Resto de 23 dividido entre 5 = ".fmod(23, 5)."</br>";
                                                                    ?>
                                                                </code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second slide-->
                        </div>
                    <!--/.Slides-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer bg-dark pt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-white font-weight-bold">© 2020 Copyright: TaniaGranda
        </div>
        <!-- Copyright -->
    </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>