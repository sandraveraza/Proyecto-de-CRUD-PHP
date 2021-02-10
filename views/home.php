
<?php

use App\EstudianteModel;

$estudianteModel = new EstudianteModel();
$estudiantes = $estudianteModel->getAll();
//var_dump($estudiantes);
?>

<div class="row mt-4">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Cedula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($estudiantes as $estudiante) {
                      
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $estudiante["cedula"]?></td>
                    <td><?php echo $estudiante["nombre1"]?></td>
                    <td><?php echo $estudiante["apellido1"]?></td>
                    <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acciones
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Editar</a>
                            <a class="dropdown-item" href="#">Eliminar</a>
                        </div>
                        </div>
                    </td>
                    </tr>
                <tr>

                <?php } ?>
               
            </tbody>
        </table>

    </div>
</div>

