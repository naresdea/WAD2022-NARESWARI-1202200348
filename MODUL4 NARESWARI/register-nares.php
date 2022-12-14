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
	
<title>REGISTER</title>
</head>

<div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 min-vh-100 left">
				<br><br><br><br><br>
                    <img width="540" height="360" src = "https://assets.jalantikus.com/assets/cache/560/360/userfiles/2022/09/12/BMW-i8-05d32.jpg.webp">
                </div>
            <div class="col-md-6">
			<h2 class="text-dark text-left">Register</h2>
			<div class="card-body">		
				<form action="" method="post">
					<!--mail-->
					<label for="email" class="form-label" style="padding-left: 10px">Email</label>
					<input type="text" class="form-control label" id="email" aria-describedby="email" name="email" required>
					<!--nama-->
					<label for="name" class="form-label" style="padding-left: 10px">Nama</label>
					<input type="name" class="form-control label" aria-describedby="name" name="name" required>
					<!--no hp-->
					<label for="number" class="form-label" style="padding-left: 10px">Nomor Handphone</label>
					<input type="text" class="form-control label" id="number" aria-describedby="number" name="number" required>
					<!--kata sandi-->
					<label for="password" class="form-label" style="padding-left: 10px">Kata Sandi</label>
					<input type="password" class="form-control label" aria-describedby="password" name="password" required>
					<!--konfirmasi kata sandi-->
					<label for="confpass" class="form-label" style="padding-left: 10px">Konfirmasi Kata Sandi Anda</label>
					<input type="password" class="form-control label" aria-describedby="password" name="passwordkonfi" required>
					<!--submit-->
						<div style="padding-top: 10px;" class="d-flex justify-content-center">
							<button type="Submit" class="btn btn-primary" style="width: 35%" name="daftar">Daftar</button>
						</div>
				</form>
				<p class="text-dark text-center">Anda sudah punya akun?
					<a href="login-nares.php"> Login</a>
				</p>
			</div>
		</div>
	</section>
</main>

<!--SCRIPT-->
<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>	
<script type="application/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="application/javascript" src="assets/js/bootstrap.bundle.min.js.map"></script>
</html>