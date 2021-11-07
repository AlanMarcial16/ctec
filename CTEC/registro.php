<?php

include ("Conection.php");

if (isset($_POST['registro'])) {
    if (strlen($_POST['nombre']) > 1 &&
        strlen($_POST['apellidos']) > 1 &&
        strlen($_POST['usrname']) > 1 &&
        strlen($_POST['pwd']) > 1 &&
        strlen($_POST['phone']) > 1 ){
        
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $usrname = $_POST['usrname'];
            $pwd = $_POST['pwd'];
            $rpwd = $_POST['rpwd'];
            $phone = $_POST['phone'];

            $consulta = "INSERT INTO users(nombre, apellido, usuario, contrasena, phone) VALUES ('$nombre', '$apellidos', '$usrname', '$pwd', '$phone')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado){
                ?>
                <br>
                <h3 class="ok">Te has registrado correctamente</h3>
                <!--<button href="index.php" class="btn btn-primary btn-user btn-block">
                    Ir a inicio de sesión
                </button>-->
                <?php
            } else {
                ?>
                <br>
                <h3 class="ok">Ha ocurrido un problema, intenta nuevamente</h3>
                <?php
            }
    } else {
        ?>
        <br> 
        <h3 class="bad">Por favor completa todos los campos</h3>
        <?php
    }
}

?>