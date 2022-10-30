<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EAD Rent Car</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg fixed-top bg-dark">
		<ul class="text-white-50 m-auto" type="none">
			<div class="">
				<li><a href="home.php">Home</a></li>
				<li><a href="booking.php">Booking</a></li>
			</div>
		</ul>
		</nav>

	</header>
	<br>
	<br>
	<br>
	
	<div style="text-align: center">
		<h3>WELCOME TO EAD RENT</h3>
	</div>
	<main>
		<div class="container p-2 bg-dark shadow text-white text-center">
			<p>Find your best deal, here!</p>
		</div>
		<section class="container p-2 bg-light shadow">
				<div class="row" style="margin-top:20px">
					<br>
					<div class="col-4">
						<form action="booking.php" method="post">
						<div class="card shower" style="width: 300px">
							<img class="card-img-top" src="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png" alt="toyota rush" height="150px">
                      		<input name="image" value="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png" hidden>
						  <div class="card-body">
							<h5 class="card-title">Toyota Rush</h5>
                      		<input name="buildingname" value="Toyota Rush" hidden>
							  <p>Rp. 200000 / Day</p>
							</div>
							  <ul class="list-group list-group-flush">
								<li class="list-group-item listready" style="text-align: center"><strong>7 Kursi</strong></li>
								<li class="list-group-item listready" style="text-align: center"><strong>1500 CC</strong></li>
								<li class="list-group-item listready" style="text-align: center"><strong>Manual</strong></li>
								<li class="list-group-item" style="text-align: center"><button class="btn btn-primary">Book Now</button></li>
							  </ul>
						</div>
						</form>
					</div>
					<div class="col-4">
						<form action="booking.php" method="post">
						<div class="card shower" style="width: 300px">
							<img class="card-img-top" src="https://goozir.com/wp-content/uploads/2019/09/Ayla-2019.jpg" alt="toyota ayla" height="150px">
                      		<input name="image" value="https://goozir.com/wp-content/uploads/2019/09/Ayla-2019.jpg" hidden>							
						  <div class="card-body">
							<h5 class="card-title">Toyota Ayla</h5>
							  <input name="buildingname" value="Toyota Ayla" hidden>
							  <p>Rp. 150000 / Day</p>
							</div>
							  <ul class="list-group list-group-flush">
								<li class="list-group-item listready" style="text-align: center"><strong>5 Kursi</strong></li>
								<li class="list-group-item listready" style="text-align: center"><strong>1200 CC</strong></li>
								<li class="list-group-item listnotready" style="text-align: center"><strong>Manual</strong></li>
								<li class="list-group-item" style="text-align: center"><button class="btn btn-primary">Book Now</button></li>
							  </ul>
						</div>
						</form>
					</div>
					<div class="col-4">
						<form action="booking.php" method="post">
						<div class="card shower" style="width: 300px">
							<img class="card-img-top" src="https://www.semisena.com/wp-content/uploads/2019/10/Honda-Brio.jpg" alt="honda brio" height="150px">
                      		<input name="image" value="https://www.semisena.com/wp-content/uploads/2019/10/Honda-Brio.jpg" hidden>	
						  <div class="card-body">
							<h5 class="card-title">Honda Brio</h5>
							  <input name="buildingname" value="Honda Brio" hidden>
							  <p>Rp. 150000 / Day</p>
							</div>
							  <ul class="list-group list-group-flush">
								<li class="list-group-item listnotready" style="text-align: center"><strong>5 Kursi</strong></li>
								<li class="list-group-item listnotready" style="text-align: center"><strong>1200 CC</strong></li>
								<li class="list-group-item listnotready" style="text-align: center"><strong>Automatic</strong></li>
								<li class="list-group-item " style="text-align: center"><button class="btn btn-primary">Book Now</button></li>
							  </ul>
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
		<p>Created by NARESWARI DEANA SHAFIRA_1202200348</p>
	</footer>
</body>
	<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="application/javascript" src="assets/js/bootstrap.min.js"></script>
</html>
