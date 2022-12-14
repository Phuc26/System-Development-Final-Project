<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="/resources/styles/styles.css">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>

	<body>
		<?php $this->view('shared/navbar'); ?>

		<div class="container-lg">

			<!-- Login Form -->
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<h1>Login</h1><hr>
					<form method="post" action="">
						<label for="username" class="form-label">Username</label>
		                <input type="text" class="form-control mb-2" name="username">

		                <label for="password" class="form-label">Password</label>
		                <input type="password" class="form-control mb-3" name="password">

		               	<div class="mb-3"> 
							<input type="checkbox" class="form-check-input" id="remember-me">
		                  	<label for="remember-me">Remember me</label>
		                  	<a href="#" class="forgot">Forgot Password?</a>
		               	</div>

	               		<button type="submit" name="action" class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div>
		
		<script src="/resources/scripts/scripts.js"></script>

		<!-- Bootstrap JS -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>

</html>