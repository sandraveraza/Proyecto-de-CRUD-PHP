
<?php



use App\EstudianteModel;
$estudianteModel = new EstudianteModel();


if (isset($_POST)){
  if (!empty($_POST)) {
    $object = (object) $_POST;
    $agregado = $estudianteModel->insert($object);
  }
}




?>

<div class="row mt-4">
    <div class="col">
       <h3>Nuevo de Estudiante</h3>

        <?php if (isset($agregado)) { ?>

       <div class="alert alert-success" role="alert">
            Registro exitoso!!!
        </div>

        <?php } ?>

        <form method="POST">
            <div class="form-group">
                <label>Cedula</label>
                <input type="text" class="form-control" name="cedula" value="" required>
            </div>
            <div class="form-group">
                <label>Nombre1</label>
                <input type="text" class="form-control" name="nombre1" value="" required>
            </div>
            <div class="form-group">
                <label>Nombre2</label>
                <input type="text" class="form-control" name="nombre2" value="" required>
            </div>
            <div class="form-group">
                <label>Apellido1</label>
                <input type="text" class="form-control" name="apellido1" value="" required>
            </div>
            <div class="form-group">
                <label>Apellido2</label>
                <input type="text" class="form-control" name="apellido2" value="" required>
            </div>
            <div class="form-group">
                <label>Carrera</label>
                <input type="text" class="form-control" name="carrera" value="" required>
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" class="form-control" name="correo" value="" required>
            </div>
            <div class="form-group">
                <label>Telefono</label>
                <input type="text" class="form-control" name="telefono" value="" >
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>

