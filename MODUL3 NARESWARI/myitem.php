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
		<h3>My Show Room</h3>
	</div>
	<main>
		<div class="container p-2 bg-dark shadow text-white text-center">
			<p>List Show Room Nareswari - 1202200348</p>
		</div>
		<section class="container p-2 bg-light shadow">
				<div class="row" style="margin-top:20px">
					<br>
					<div class="col-4">
						<form action="additem.php" method="post">
						<div class="card shower" style="width: 300px">
							<img class="card-img-top" src="https://statik.tempo.co/data/2021/03/18/id_1008120/1008120_720.jpg" alt="bmw i4" height="150px">
                      		<input name="image" value="https://statik.tempo.co/data/2021/03/18/id_1008120/1008120_720.jpg" hidden>
						  <div class="card-body">
							<h5 class="card-title">BMW i4</h5>
                      		<input name="mobil" value="BMW i4" hidden>
							  <p>The i4 M50 is built with BMW's near-perfect 50/50 weight distribution for better balance and responsiveness. The low-mounted battery reduces the center of gravity and improves body rigidity.</p>
							</div>
							  <ul class="list-group list-group-flush">
                              <li class="list-group-item"><button class="btn btn-primary">Detail</button></li>
							    <li class="list-group-item"><button class="btn btn-primary">Delete</button></li>
							  </ul>
						</div>
						</form>
                        <br>
					<div class="col-4">
						<form action="additem.php" method="post">
						<div class="card shower" style="width: 300px">
							<img class="card-img-top" src="https://statik.tempo.co/data/2019/09/01/id_868656/868656_720.jpg" alt="nissan gtr" height="150px">
                      		<input name="image" value="https://statik.tempo.co/data/2019/09/01/id_868656/868656_720.jpg" hidden>
						  <div class="card-body">
							<h5 class="card-title">Nissan GTR</h5>
                      		<input name="mobil" value="nissan gtr" hidden>
							  <p>Desain eksterior Nissan GT-R sangat keren dan modern, lalu bagaimana dengan interiornya? jika melihat eksterior yang menawan, maka interior Nissan GT-R tidak jauh beda. Pasalnya bahan-bahan premium pasti sudah digunakan pada seluruh bagian kabin.</p>
							</div>
							  <ul class="list-group list-group-flush">
                              <li class="list-group-item"><button class="btn btn-primary">Detail</button></li>
							    <li class="list-group-item"><button class="btn btn-primary">Delete</button></li>
							  </ul>
						</div>
						</form>
					</div>
                    <br>
					<div class="col-4">
						<form action="additem.php" method="post">
						<div class="card shower" style="width: 300px">
							<img class="card-img-top" src="https://imgcdn.oto.com/medium/gallery/exterior/24/886/mclaren-570s-front-angle-low-view-539676.jpg" alt="mclaren" height="150px">
                      		<input name="image" value="https://imgcdn.oto.com/medium/gallery/exterior/24/886/mclaren-570s-front-angle-low-view-539676.jpg" hidden>
						  <div class="card-body">
							<h5 class="card-title">McLaren</h5>
                      		<input name="mobil" value="mclaren" hidden>
							  <p>Saat ini ada 6 model mobil Mclaren yang tersedia di Indonesia. Mclaren 765LT, Mclaren 720S, Mclaren GT adalah mobil Mclaren paling populer.</p>
							</div>
							  <ul class="list-group list-group-flush">
                              <li class="list-group-item"><button class="btn btn-primary">Detail</button></li>
							    <li class="list-group-item"><button class="btn btn-primary">Delete</button></li>
							  </ul>
						</div>
						</form>
					</div>
						</form>
					</div>
				</div>
		</section>
	</main>
	<br>
	<br>
	<br>
	<br>
	<footer class="fixed-bottom">
		<p>Jumlah Mobil: 3</p>
	</footer>
</body>
	<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="application/javascript" src="assets/js/bootstrap.min.js"></script>
</html>
