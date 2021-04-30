<?php
include('Database.php');
$search = $_POST['search'];
if (!empty($search)) {
    $query = "SELECT * FROM datos WHERE Nombre LIKE '$search%'";
    $result = mysqli_query($connection,$query);
    if (!$result) {
        die('No se pudo realizar la consulta'.mysqli_error($connection));
    }

    $json =  array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
             'Nombre' => $row['Nombre'],
             'Apellido' => $row['Apellido'],
             'Id' => $row['Id'],
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>