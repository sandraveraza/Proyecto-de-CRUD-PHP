<?php namespace App;

    date_default_timezone_set('America/Lima');
    @ob_start();
    session_start();


    require_once './vendor/autoload.php';
    
    $route = new RouteController();
?>

    
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/estilo.css">
        
        <title>Aplicacion</title>
    
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">SandiasApp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?action=home">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=estudiante">Estudiantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=tutores">Tutores</a>
                </li>
               
            
               
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <?php 
                        if (isset($_SESSION["usuario"])) {
                            echo ' <a href="index.php?action=logout" class="btn btn-danger my-2 my-sm-0" type="submit">Cerrar Sesion</a>';
                           
                        }else{
                            echo ' <a href="index.php?action=login" class="btn btn-success my-2 my-sm-0" type="submit">Iniciar Sesion</a>';
                        }
                    ?>
                </form>
            </div>
        </nav>

        <div class="container">
            <?php 
             if (isset($_GET['action'])){
                $action = $_GET['action'];
             }else{
                 $action = 'home';
             }
                include ($route->mostrarSeccion($action));
            ?>
        </div>

      
    
        <!-- JavaScript Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
    </html>

