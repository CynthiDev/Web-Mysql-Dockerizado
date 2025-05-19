<?php
$mysqli = new mysqli("mysql-container", "root", "mysql234", "devops_pfo_dos");
$result = $mysqli->query("SELECT * FROM persona");
while ($row = $result->fetch_assoc()) {
  echo "<p>".$row['id']." - ".$row['nombre']." - ".$row['rol']."</p>";
}
?>