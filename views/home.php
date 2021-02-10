
<?php

use App\EstudianteModel;

$estudianteModel = new EstudianteModel();
$estudiantes = $estudianteModel->getAll();
//var_dump($estudiantes);

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $estudianteModel->delete($id);
}

?>

<div class="row mt-4">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
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
                    <td><?php echo $estudiante["cedula"]?></td>
                    <td><?php echo $estudiante["nombre1"]?></td>
                    <td><?php echo $estudiante["apellido1"]?></td>
                    <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acciones
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="index.php?action=editarestudiante&id=<?php echo $estudiante["id"]?>" class="dropdown-item">Editar</a>
                            <a href="index.php?action=home&delete=<?php echo $estudiante["id"]?>" class="dropdown-item" href="#">Eliminar</a>
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

