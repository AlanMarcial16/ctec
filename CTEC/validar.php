<?php
include('Conection.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","ctec");

$consulta="SELECT * FROM users where usuario='$usuario' and contrasena='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("Location: index.php");

}else{
    ?>
    <?php
    include("login.php");

  ?>
  <?php
    echo '<script>alert("El usuario o contraseña que ingreso son incorrectos")</script>';
?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);