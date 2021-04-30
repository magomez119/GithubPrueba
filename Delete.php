<?php
include('Database.php');
if (isset($_POST['id'])) {
    $Id = $_POST['id'];
    $query = "DELETE FROM  datos WHERE Id = $Id ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Consulta fallida');
    }
    echo "Registro eliminado correctamente";
}

?>