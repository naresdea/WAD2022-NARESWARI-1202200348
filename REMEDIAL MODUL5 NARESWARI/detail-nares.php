<?php
$conn = new mysqli("localhost", "root", "", "modul3");
$id_mobil = $_GET['id'];
$query = "SELECT * FROM showroom_deana_table WHERE id_mobil = $id_mobil";
$result = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark-hover-black fixed-top bg-dark shadow bg-primary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav navbar-dark">
                        <a class="nav-link active" aria-current="page" href="home-nares.php">Home</a>
                        <a class="nav-link active" href="add.php">MyCar</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <br>
    <br>

    <main class="container">
        <?php
        while ($data = mysqli_fetch_assoc($result)) {
            echo "
        <div style='text-align: left'>
            <h3>" . $data["nama_mobil"] . "</h3>
        </div>
        <div class='container p-2 bg-dark shadow text-white text-center'>
            <p>" . $data["nama_mobil"] . "</p>
        </div>
        <div class='d-flex'>
            <div class='col'>
                <img src='./asset/images/" . $data["foto_mobil"] . "' class='rounded mx-auto d-block' alt='bmw' height='300' weidth='100'>
            </div>
            <form>
                    <label style='display: block;' for='nama'>Nama Mobil</label>
                    <input type='text' id='nama' name='nama' value='" . $data["nama_mobil"] . "' >
                    <label style='display: block;' for='pemilik'>Nama Pemilik</label>
                    <input type='text' id='pemilik' name='pemilik' value='" . $data["pemilik_mobil"] . "' >
                    <label style='display: block;' for='merk'>Merk</label>
                    <input type='text' id='merk' name='merk' value='" . $data["merk_mobil"] . "' >
                    <label style='display: block;' for='tanggalbeli'>Tanggal Beli</label>
                    <input type='date' id='tanggalbeli' name='tanggalbeli' value='" . $data["tanggal_beli"] . "' >
                    <label style='display: block;' for='desc'>Deskripsi</label>
                    <textarea id='desc' name='desc' style='height:200px; width: 600px; border-radius: 8px;' > " . $data["deskripsi"] . " </textarea>
                    <label style='display: block;' for='inputGroupFile01'>Foto</label>
                    <input type='file' class='form-control' id='inputGroupFile01' value='" . $data["foto_mobil"] . "' name='gambar' style='height: 40px;'>
                    <label style='display: block;' for='status'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input type='radio' name='status' id='lunas' value='Lunas' " . (($data["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; margin-top: 17px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status' id='belum' value='Belum Lunas' " . (($data["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; margin-top: 17px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <a href='edit.php?id=" . $data["id_mobil"] . "' class='btn btn-primary' style='margin-top: 40px;'>Edit</a>
            </form>
        </div>
        ";
        }
        ?>
    </main>
    <br>
</body>

</html>