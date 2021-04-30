<?php
include('Database.php');
$id = $_POST['id'];
$query = "SELECT * FROM datos WHERE Id = $id";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Consulta fallida');
}
$json = array();
while($row = mysqli_fetch_array($result)) {
  $json[] = array(
   'Nombre' => $row['Nombre'],
    'Apellido' => $row['Apellido'],
    'Id' => $row['Id']
  );
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}
?>