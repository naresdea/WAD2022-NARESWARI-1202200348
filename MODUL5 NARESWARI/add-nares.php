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
    <nav class="navbar navbar-expand-lg navbar-dark-hover-black bg-dark shadow bg-primary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-dark">
                    <a class="nav-link active" aria-current="page" href="home-nares.php">Home</a>
                    <a class="nav-link active" href="add-nares.php">MyCar</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <main class="container">
        <h3 style="text-align: left" id="regist">Tambah Mobil</h3>
        <div class="container p-2 bg-dark shadow text-white text-center">
            <p>Tambah Mobil Baru Anda Ke List Show Room</p>
        </div>
        <article>
            <form method="POST" action="./insert.php" enctype="multipart/form-data">
                <label style="display: block;" for="nama">Nama Mobil</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Mobil">
                <label style="display: block;" for="pemilik">Nama Pemilik</label>
                <input type="text" id="pemilik" name="pemilik" placeholder="Masukkan Nama Pemilik">
                <label style="display: block;" for="merk">Merk</label>
                <input type="text" id="merk" name="merk" placeholder="Masukkan Merk Mobil">
                <label style="display: block;" for="tanggalbeli">Tanggal Beli</label>
                <input type="date" id="tanggalbeli" name="tanggalbeli">
                <label style="display: block;" for="desc">Deskripsi</label>
                <textarea id="desc" name="desc" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
                <label style="display: block;" for="inputGroupFile01">Foto</label>
                <input type="file" class="form-control" id="inputGroupFile01" name="gambar" style="height: 40px;">
                <label style="display: block;" for="status">Status Pembayaran</label>
                <span class="d-flex">
                    <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; margin-top:17px; height: 15px; margin-right:10px;">
                    <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
                    <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; margin-top:17px; height: 15px; margin-right:10px;">
                    <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
                </span>
                <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
            </form>
        </article>
        </section>
    </main>
    </div>
    </div>
</body>

</html>