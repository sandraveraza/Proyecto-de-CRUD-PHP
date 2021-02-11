<?php

use App\loginController;

$login = new loginController();
$login->login();

?>

<h1 id="inicio">TRABAJO ESPECIAL DE GRADO</h1>
    <h2>Bienvenido</h2>
    <form method="POST">
        <section class="form-registro-index">
        <input class="controls-index" type="text" name="usuario" id="Usuario" placeholder="Usuario">
        <input class="controls-index" type="password" name="password" id="Contrasena" placeholder="Contraseña">
        <p><a href="home.html">¿Olvido su contraseña?</a></p>
        <input class="botons-index" type="submit" value="Ingresar">
        <p><a href="home.html">Registrarme</a></p>
    </form>
       
    
</section>
