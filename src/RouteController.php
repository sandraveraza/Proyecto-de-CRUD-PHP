<?php namespace App;

class RouteController {
    
    public function mostrarSeccion($action){
        switch ($action) {
            case 'home':
                $contenido = "views/home.php";
                break;
            
            case 'estudiante':
                $contenido = "views/estudiante.php";
                break;

            default:
                $contenido = "views/home.php";
                break;
        }
        
       
        return $contenido;
        
    }
}
