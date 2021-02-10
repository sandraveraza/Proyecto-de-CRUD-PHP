<?php namespace App;
    require_once '../vendor/autoload.php';

    $estudiante = new EstudianteModel();

    $estudianteDTO = new \stdClass;
    $estudianteDTO->cedula = '1600505555';
    $estudianteDTO->nombre1 = 'José';
    $estudianteDTO->apellido1 = 'Guty';


    var_dump($estudiante->delete(3));



