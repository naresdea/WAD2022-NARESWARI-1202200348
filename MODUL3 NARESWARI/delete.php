<?php
require './connector.php';

$id_mobil = $_GET['id'];

$query = "DELETE FROM showroom_deana_table WHERE id_mobil = $id_mobil";

$result = mysqli_query($conn, $query);

if ($result) {
  header("Location: ./myitem.php");
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
