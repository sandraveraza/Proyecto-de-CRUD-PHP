<?php namespace App;

class Conexion {
    //Atributos
    private $driver, $host, $user, $pass, $dbname;
    public $instancia;
    //Constructor
    public function __construct() {
        
        /*CONEXION PARA DESAROLLO*/
        $this->driver = 'mysql';
        $this->host = "localhost";
        $this->dbname = "prueba";
        $this->port = "3306";
        $this->user = "root";
        $this->pass = "";
        $this->charset = "utf8";
        $this->instancia = $this->getInstanciaCNX();
    }
    
    /** Retorna una instancia PDO**/
    public function conectarDB(){
        if ($this->driver=='mysql' || $this->driver==NULL){ 
            try {
                $cnx = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
                $cnx->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->instancia = $cnx;
                return $this->instancia;   
            } catch (\Exception $ex) {
                return FALSE;
            }
        }else{
            return false;
        }
            
       
    }
    
    function getInstanciaCNX(){
        if ($this->instancia != NULL || $this->instancia == '' ){
            return $this->conectarDB();
        }else{
            return $this->instancia;
        }
    }

    function test(){
        return "Clase funcionando";
    }
    
   
}

