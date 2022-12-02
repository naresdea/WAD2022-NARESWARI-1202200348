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
	
<title>LOGIN</title>
</head>

<body>

</header>
<!--MAIN MAIN MAIN-->
<div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 min-vh-100 left">
					<br><br><br><br><br>
                    <img width="540" height="360" src = "https://assets.jalantikus.com/assets/cache/560/360/userfiles/2022/09/12/BMW-i8-05d32.jpg.webp">
                </div>
            <div class="col-md-6">
			<h2 class="text-dark text-left">Login</h2>
            <div class="card-body">		
				<form action="login.php" method="post">
					<!--mail-->
					<label for="email" class="form-label" style="padding-left: 10px">Email</label>
					<input type="text" class="form-control label" id="email" aria-describedby="email" name="email" required>
					<!--kata sandi-->
					<label for="password" class="form-label" style="padding-left: 10px">Password</label>
					<input type="password" class="form-control label" aria-describedby="password" name="password" required>
                    <!--remember me-->
					<div class="form-check" style="padding-top: 20px">
						<input class="form-check-input" type="checkbox" value="rememberme" id="flexCheckDefault">
						<label class="form-check-label" for="flexCheckDefault">Remember Me</label>
					<!--submit-->
						<div style="padding-top: 10px;" class="d-flex justify-content-center">
							<button type="Submit" class="btn btn-primary" style="width: 35%" name="login">Login</button>
						</div>
				</form>
				<p class="text-dark text-center">Anda sudah punya akun?
					<a href="register-nares.php"> Daftar</a>
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