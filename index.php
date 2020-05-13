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
                    <a class="nav-link" data-toggle="tab" href="#menu2">Bucles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Operadores</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
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
                                                        <p class="text-justify">Calcula la diferencia entre arrays. Para comparar arrays existen 5 funciones principales de la familia "arraydiff"</p>
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
                                <div class="col-md-12">
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
                                                        <p class="text-justify">Calcula la diferencia entre arrays. Para comparar arrays existen 5 funciones principales de la familia "arraydiff"</p>
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
                            <!--/.Second slide-->
                        </div>
                    <!--/.Slides-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>

                <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer bg-dark pt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright: TaniaGranda
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