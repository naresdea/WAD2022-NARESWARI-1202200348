		<!doctype html>
		<html>
		<head>
		<meta charset="utf-8">
		<title>EAD Rent Car</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
		</head>
			
		<?
		$bookingnumber 	= rand(1000000000, 9999999999);
		$nameofcustomer = $_POST['nameofcustomer'];
		$checkinDate 	= $_POST['event'] . " " . $_POST['time'];
		$checkoutDate 	= date("d-m-Y H:i", (strtotime($checkinDate) + 60 * 60 * $_POST['duration']));
		$car 		= $_POST['car'];
		$phone		= $_POST['phone'];
		$duration 		=$_POST['duration'];

		$invoice = 0;
		if ($car == 'Toyota Rush'){
			$invoice += (200000 * $duration);
		}else if($car == 'Toyota Ayla'){
			$invoice += (150000 * $duration);
		}else if($car == 'Honda Brio'){
			$invoice += (150000 * $duration);
		}
			

		if (isset($_POST['service'])) {
			foreach ($_POST['service'] as $service) {
			if ($service == 'Health Protocol') {
				$invoice += 25000;
			}
			if ($service == 'Driver'){ 
				$invoice += 100000;
			}
			if ($service == 'Fuel Filled'){
				$invoice += 250000;} 
			}
		}
		?>
			
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
				<h3>Thank You Nareswari Deana Shafira_1202200348 for Reserving</h3>
				<h4>Please double check your reservation details</h4>
				<br>
				<br>
			</div>
			<div class="container p-0 bg-light shadow">
				<table class="table">
				<thead>
					<tr>
						<th scope="col">Booking Number</th>
						<th scope="col">Name</th>
						<th scope="col">Check In</th>
						<th scope="col">Check Out</th>
						<th scope="col">Car type</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Service(s)</th>
						<th scope="col">Total Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<th scope="row"><?php echo $bookingnumber?></th>
						<td><?php echo $nameofcustomer ?></td>
						<td><?php echo $checkinDate ?></td>
						<td><?php echo $checkoutDate ?></td>
						<td><?php echo $car ?></td>
						<td><?php echo $phone ?></td>
						<td> <ul><?php
									if (isset($_POST['service'])) {
										foreach ($_POST['service'] as $service) {
											echo "<li>$service</li>";
										}
									} else {
										echo "No Service";
									}
									?>
							</ul>
						</td>
						<td><?= '$' . $invoice ?></td>
					</tr>
				</tbody>
				</table>
				</div>
			<main>
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
