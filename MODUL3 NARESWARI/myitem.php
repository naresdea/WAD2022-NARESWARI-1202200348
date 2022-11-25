<?php
$conn = new mysqli("localhost", "root", "", "modul3");
$query = "SELECT * FROM showroom_deana_table";
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
		<nav class="navbar navbar-expand-lg navbar-dark-hover-black bg-dark shadow bg-primary">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav navbar-dark">
						<a class="nav-link active" aria-current="page" href="home.php">Home</a>
						<a class="nav-link active" href="additem.php">MyCar</a>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<br>
	<br>
	<br>
	<div class="container">
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
					<div class="d-flex gap-4">
						<?php
						if (mysqli_num_rows($result) > 0) {
							while ($data = mysqli_fetch_assoc($result)) {
								echo "
							<div class='card shower' style='width: 300px'>
								<img class='card-img-top' src='./asset/images/" . $data["foto_mobil"] . "' alt='" . $data["foto_mobil"] . "' height='150px'>
								<div class='card-body'>
									<h5 class='card-title'>" . $data["nama_mobil"] . "</h5>
									<p>" . $data["deskripsi"] . "</p>
								</div>
								<ul class='list-group list-group-flush'>
									<li class='list-group-item'><a href='itemdetail.php?id=" . $data["id_mobil"] . "' class='btn btn-primary'>Detail</a></li>
									<li class='list-group-item'><a href='delete.php?id=" . $data["id_mobil"] . "' class='btn btn-danger'>Delete</a></li>
								</ul>
							</div>
						";
							}
						}
						?>
					</div>
				</div>
			</section>
		</main>
	</div>
	<br>
	<br>
	<br>
	<br>
	<footer class="fixed-bottom">
		<p>Jumlah Mobil: <?php echo mysqli_num_rows($result) ?></p>
	</footer>
</body>
<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="application/javascript" src="assets/js/bootstrap.min.js"></script>

</html>