
<?php

use App\EstudianteModel;
$id = $_GET["id"];
$estudianteModel = new EstudianteModel();
$estudiante = $estudianteModel->get($id);

?>

<div class="row mt-4">
    <div class="col">
       <h3>Edicion de Estudiante</h3>

        <form method="POST">
            <div class="form-group">
                <label>Cedula</label>
                <input type="text" class="form-control" value="<?php echo $estudiante["cedula"]?>">
            </div>
            <div class="form-group">
                <label>Nombre1</label>
                <input type="text" class="form-control" value="<?php echo $estudiante["nombre1"]?>">
            </div>
            <div class="form-group">
                <label>Apellido1</label>
                <input type="text" class="form-control" value="<?php echo $estudiante["apellido1"]?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>

