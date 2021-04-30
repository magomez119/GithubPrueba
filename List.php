<?php
include('Database.php');
$query = 'SELECT * FROM datos';
$result = mysqli_query($connection,$query);
if(!$result) {
    die('No se encuentran resultados disponibles'. mysqli_error($connection));
}
$json = array();
while($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'Nombre' => $row['Nombre'],
        'Apellido' => $row['Apellido'],
        'Id' => $row['Id']
    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
?>