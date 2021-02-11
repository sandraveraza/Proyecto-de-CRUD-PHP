<?php namespace App;

use App\Conexion;

class loginModel extends Conexion {
 
    public function __construct() {
        parent::__construct();
    }

    public function validaIngreso($arrayDatos){

        $usuario = $arrayDatos['usuario'];
        $password = $arrayDatos['password'];

        $query = "
            SELECT * FROM `usuarios` 
            WHERE 
                usuario = :usuario AND
                password = :password
           
        ";
        $stmt = $this->instancia->prepare($query); 
        $stmt->bindParam(':usuario', $usuario); 
        $stmt->bindParam(':password', $password); 
    
            if($stmt->execute()){
                $resulset = $stmt->fetch( \PDO::FETCH_ASSOC );
            }else{
                $resulset = false;
            }

        return $resulset;
           
        
    }

  
    
}
