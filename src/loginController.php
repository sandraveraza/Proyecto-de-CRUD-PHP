<?php namespace App;

use App\loginModel;

class loginController  {

    public $loginModel;

    public function __construct()
    {
        $this->loginModel = new loginModel();
    }

    public function login(){
        if (isset($_POST['usuario']) && isset($_POST['password']) ) {
                $arrayDatos = array("usuario"=>$_POST['usuario'],"password"=>$_POST['password']);
                $arrayResultados = $this->loginModel->validaIngreso($arrayDatos);
              
                    if (!empty($arrayResultados)) {
                         if(!isset($_SESSION)) 
                            { 
                                session_start(); 
                            } 
                        $_SESSION["usuario"] =  trim($arrayResultados['usuario']);
                        header("Location: index.php?&action=estudiantes");
                           
                    }else{
                        
                        echo '
                            <div class="alert alert-danger text-center">
                                No se ha podido ingresar con el usuario <strong>'.$arrayDatos['usuario'].' </strong>, reintente.
                        
                            </div>
                        ';
                    }
        }
    }

   
    
}
