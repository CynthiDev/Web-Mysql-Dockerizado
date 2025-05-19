<?php
$mysqli = new mysqli("db", "root", "admin234", "devops_pfo_dos_part_dos");
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM persona");
while ($row = $result->fetch_assoc()) {
  echo "<p>".$row['id']." - ".$row['nombre']." - ".$row['rol']."</p>";
}
?>