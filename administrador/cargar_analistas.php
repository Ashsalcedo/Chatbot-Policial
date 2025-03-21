<?php
include 'conexion.php';

// Consultar IDs de los analistas
$sql = "SELECT id_analista FROM analistas";
$result = $conn->query($sql);

$options = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $options .= "<option value='{$row['id_analista']}'>{$row['id_analista']}</option>";
    }
} else {
    $options = "<option value=''>No hay analistas disponibles</option>";
}

echo $options;

$conn->close();
?>
