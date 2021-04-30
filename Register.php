<?php
include('Database.php');

if (isset($_POST['Nombre'])) {
    $Nombre = $_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $query = "INSERT INTO datos(Nombre,Apellido) VALUES ('$Nombre','$Apellido')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('No se obtuvieron resultados');
    }
    echo 'Registro exitoso';
       
}
?>