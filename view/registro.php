<?php
include('db.php');

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Rol = $_POST['Rol'];
    
    $query = "INSERT INTO USUARIO(nombre, correo, password, idRol) VALUES ('$nombre', '$email', '$password', '$Rol')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
    die("Query Failed.");
      }
    
    $_SESSION['message'] = 'Guardado correctamente';
      $_SESSION['message_type'] = 'success';
      header('Location: forms-elements.php');
    
    
}
  


?>