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
		<nav class="navbar navbar-expand-lg fixed-top bg-dark">
		<ul class="text-white-50 m-auto" type="none">
			<div class="">
				<li><a href="home.php">Home</a></li>
				<li><a href="additem.php">MyCar</a></li>
			</div>
		</ul>
		</nav>

	</header>
	<br>
	<br>
	<br>
	
	<div style="text-align: left">
		<h3>BMW I4</h3>
	</div>
	<main>
		<div class="container p-2 bg-dark shadow text-white text-center">
			<p>Detail Mobil BMW I4</p>
		</div>

        <div class="col">
        <img src="asset\images\bmw i4.jpeg" class="rounded mx-auto d-block" alt="bmw" height="300" weidth="100">
        </div>
    </div>
    </div>

    <article>
    <form>
                                <table id="tableReg">
                                    <tr>
                                        <div class="form-group row">
                                            <td class="left">
                                                <label for="inputMobil" class="col col-form-label">Nama Mobil</label>
                                            </td>
                                            <td>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="inputMobil">
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                    <br>
                                    <tr>
                                        <div class="form-group row">
                                            <td class="left">
                                                <label for="inputName" class="col col-form-label">Nama Pemilik</label>
                                            </td>
                                            <td>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="inputName">
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                    <br>
                                    <tr>
                                        <div class="form-group row">
                                            <td class="left">
                                                <label for="inputMerk" class="col col-form-label">Merk</label>
                                            </td>
                                            <td>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="inputMerk">
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                    <br>
                                    <br>
                                    <tr>
                                        <div class="form-group row">
                                            <td class="left">
                                                <label for="inputTanggal" class="col col-form-label">Tanggal Beli</label>
                                            </td>
                                            <td>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="inputTanggal">
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                    <br>
                                    <tr>
                                        <div class="form-group row">
                                            <td class="left">
                                                <label for="inputDesease" class="col col-form-label">Deskripsi</label>
                                            </td>
                                            <td>
                                                <div class="col">
                                                    <textarea class="form-control" id="inputDesease"></textarea>
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                    <br>
                                    <tr>
                                        <div class="form-group row">
                                            <td class="left">
                                                <label for="Payment" class="col col-form-label">Status Pembayaran</label>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input">
                                                    <label class="form-check-label" for="lunas">Lunas</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input">
                                                    <label class="form-check-label" for="belum">Belum Lunas</label>
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                    <br>
                                    <tr><td>
                                    <button type="submit" class="btn btn-primary">Edit</button></td></tr>
                                </table>
                            </form>
                        </article>
                    </section>
                </main>
                <br>