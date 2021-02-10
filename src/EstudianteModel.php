<?php namespace App;

    class EstudianteModel extends Conexion{
        
        public function insert($estudiante){
            $query = "
            INSERT INTO `estudiante`(`cedula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `carrera`, `correo`, `telefono`) VALUES ('
                                $estudiante->cedula', 
                                '$estudiante->nombre1',
                                '$estudiante->nombre2',
                                '$estudiante->apellido1',
                                '$estudiante->apellido2',
                                '$estudiante->carrera',
                                '$estudiante->correo',
                                '$estudiante->telefono'
                                )
        
            ";

            $stmt = $this->instancia->prepare($query); 
          
                if($stmt->execute()){
                    $resulset = true;
                }else{
                    $resulset = false;
                }

            return $resulset;
        }

        public function get($id){
            $query = "
            SELECT * FROM `estudiante` 
                WHERE 
            id  = :id
            ";

            $stmt = $this->instancia->prepare($query); 
            $stmt->bindParam(':id', $id); 
            
                if($stmt->execute()){
                    $resulset = $stmt->fetch(\PDO::FETCH_ASSOC);
                }else{
                    $resulset = false;
                }

            return $resulset;
        }

        public function getAll(){
            $query = "
                SELECT * FROM `estudiante` 
            ";

            $stmt = $this->instancia->prepare($query); 
            
                if($stmt->execute()){
                    $resulset = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                }else{
                    $resulset = false;
                }

            return $resulset;
        }

        public function update($id, $estudiante){
            $query = "
                UPDATE estudiante 
                SET 
                    cedula  = :cedula,
                    nombre1 = :nombre1,
                    nombre2 = :nombre2,
                    apellido1 = :apellido1,
                    apellido2 = :apellido2,
                    carrera = :carrera,
                    correo = :correo,
                    telefono = :telefono

                WHERE
                    cedula = :cedula;
            ";

            $stmt = $this->instancia->prepare($query); 
            $stmt->bindParam(':cedula', $estudiante->cedula); 
            $stmt->bindParam(':nombre1', $estudiante->nombre1); 
            $stmt->bindParam(':nombre2', $estudiante->nombre2); 
            $stmt->bindParam(':apellido1', $estudiante->apellido1); 
            $stmt->bindParam(':apellido2', $estudiante->apellido2); 
            $stmt->bindParam(':carrera', $estudiante->carrera); 
            $stmt->bindParam(':correo', $estudiante->correo); 
            $stmt->bindParam(':telefono', $estudiante->telefono); 

            $stmt->bindParam(':id', $id); 
            
                if($stmt->execute()){
                    $resulset = $stmt->fetch( \PDO::FETCH_ASSOC );
                }else{
                    $resulset = false;
                }

            return $resulset;
        }

        public function delete($id){
            $query = "
                DELETE FROM `estudiante` WHERE id =:id
            ";

            $stmt = $this->instancia->prepare($query);
            $stmt->bindParam(':id', $id);  
          
                if($stmt->execute()){
                    $resulset = true;
                }else{
                    $resulset = false;
                }

            return $resulset;
        }


    }