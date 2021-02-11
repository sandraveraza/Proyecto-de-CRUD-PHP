<?php namespace App;

class RouteController {
    
    public function mostrarSeccion($action){
        switch ($action) {
            case 'home':
                $contenido = "views/home.php";
                break;
            
            /*Rutas de tutotes*/
            case 'login':
                $contenido = "views/login.php";
                break;

            case 'logout':
                session_destroy();
                header("Location:index.php?&action=home");  
                break;

            /*Rutas de estudiantes*/
            case 'estudiante':
                $contenido = "views/listaestudiandes.php";
                break;

            case 'editarestudiante':
                $contenido = "views/editarestudiante.php";
                break;

            case 'nuevoestudiante':
                $contenido = "views/nuevoestudiante.php";
                break;

            /*Rutas de tutotes*/
            case 'tutores':
                $contenido = "views/listatutores.php";
                break;

            case 'editaretutor':
                $contenido = "views/editaretutor.php";
                break;

            case 'nuevotutor':
                $contenido = "views/nuevotutor.php";
                break;

                

            default:
                $contenido = "views/home.php";
                break;
        }
        
       
        return $contenido;
        
    }
}
