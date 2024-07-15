<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","u233272733_x","Guatemala2050.","u233272733_X");

$consulta="SELECT*FROM USUARIO where correo='$usuario' and password='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['idRol']==1){ //administrador
    header("location:view/indexAdmin.php");

}else
if($filas['idRol']==2){ //cliente
header("location:empleado.php");
}
else{
    ?>
    <?php
    include("index-X.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACIÓN</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
