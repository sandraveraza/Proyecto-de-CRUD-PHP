
<?php

if (!isset($_SESSION["usuario"])) {
    header("Location:index.php?&action=login");  
}

use App\EstudianteModel;
$estudianteModel = new EstudianteModel();
$id = $_GET["id"];

if (isset($_POST)){
    $object = (object) $_POST;
    //var_dump($object);
    $actualizado = $estudianteModel->update($id, $object);
}


$estudiante = $estudianteModel->get($id);
//var_dump($estudiante);



?>

<div class="row mt-4">
    <div class="col">
       <h3>Edicion de Estudiante</h3>

    
        <form method="POST">
            <div class="form-group">
                <label>Cedula</label>
                <input type="text" class="form-control" name="cedula" value="<?php echo $estudiante["cedula"]?>">
            </div>
            <div class="form-group">
                <label>Nombre1</label>
                <input type="text" class="form-control" name="nombre1" value="<?php echo $estudiante["nombre1"]?>">
            </div>
            <div class="form-group">
                <label>Nombre2</label>
                <input type="text" class="form-control" name="nombre2" value="<?php echo $estudiante["nombre2"]?>">
            </div>
            <div class="form-group">
                <label>Apellido1</label>
                <input type="text" class="form-control" name="apellido1" value="<?php echo $estudiante["apellido1"]?>">
            </div>
            <div class="form-group">
                <label>Apellido2</label>
                <input type="text" class="form-control" name="apellido2" value="<?php echo $estudiante["apellido2"]?>">
            </div>
            <div class="form-group">
                <label>Carrera</label>
                <input type="text" class="form-control" name="carrera" value="<?php echo $estudiante["carrera"]?>">
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="text" class="form-control" name="correo" value="<?php echo $estudiante["correo"]?>">
            </div>
            <div class="form-group">
                <label>Telefono</label>
                <input type="text" class="form-control" name="telefono" value="<?php echo $estudiante["telefono"]?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>

