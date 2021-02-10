<?php namespace App;

class RouteController {
    
    public function mostrarSeccion($action){
        switch ($action) {
            case 'home':
                $contenido = "views/home.php";
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

                

            default:
                $contenido = "views/home.php";
                break;
        }
        
       
        return $contenido;
        
    }
}
