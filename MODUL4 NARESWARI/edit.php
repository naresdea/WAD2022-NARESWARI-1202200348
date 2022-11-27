<?php
require './connector.php';

// update data by id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $nama = $_POST['nama'];
  $pemilik = $_POST['pemilik'];
  $merk = $_POST['merk'];
  $tanggalbeli = $_POST['tanggalbeli'];
  $desc = $_POST['desc'];
  $gambar = $_FILES['gambar']['name'];
  $status = $_POST['status'];

  if (move_uploaded_file($_FILES['gambar']['tmp_name'], "./asset/images/" . $gambar)) {
    $sql = "UPDATE showroom_deana_table SET nama_mobil = '$nama', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', foto_mobil = '$gambar', status_pembayaran = '$status' WHERE id_mobil = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header("Location: ./myitem.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
