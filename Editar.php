<?php
 include('database.php');
 $Id =  $_POST['Id'];
 $Nombre = $_POST['Nombre'];
 $Apellido = $_POST['Apellido'];

 $query = "UPDATE datos SET Nombre = '$Nombre', Apellido = '$Apellido' WHERE Id = $Id";
 $result = mysqli_query($connection,$query);
  if (!$result) {
     die('Consulta Fallida');
  }
?>
