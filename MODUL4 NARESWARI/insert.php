<?php
require './connector.php';

if (isset($_POST['nama'])) {
  $nama = $_POST['nama'];
  $pemilik = $_POST['pemilik'];
  $merk = $_POST['merk'];
  $tanggalbeli = $_POST['tanggalbeli'];
  $desc = $_POST['desc'];
  $gambar = $_FILES['gambar']['name'];
  $status = $_POST['status'];

  if (move_uploaded_file($_FILES['gambar']['tmp_name'], "./asset/images/" . $gambar)) {
    $sql = "INSERT INTO showroom_deana_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
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
