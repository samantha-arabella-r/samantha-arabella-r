<?php
	include("dbconnect.php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css bootstrap -->
		<link rel="stylesheet" type="text/css" href="assets\bootstrap-5.0.2-dist\css\bootstrap.min.css">
		<script type="text/javascript" src="assets\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>

	<!-- external css -->
		<link rel="stylesheet" type="text/css" href="assets\formstyle.css">

	<!-- google fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,600&family=Roboto&display=swap" rel="stylesheet">

	<title>Login</title>
	
</head>

<body>

	<div class="container-fluid text-white custom-bar">
		<!-- <h5 style="margin-left: 20px;">
			BeyondTheMap
		</h5> -->
	</div>

	
	<div class="container my-5">
			<div class="row d-flex align-items-center">

				<div class="col-md-6 d-flex flex-column justify-content-center ps-5 text-white">
				      <h1 class="display-2 fw-bold">
				      		SEEK.
				      		FEEL.
				      		BELONG.
				      </h1>
				      <p class="lead">Beyond the map, dicover more than destinations.</p>
				</div>

				<div class="col-md-5 d-flex justify-content-center align-items-center">
					<div class="card show mx-auto">
						<!-- log in form -->
						<div class="container">
							<div class="login-form">
								<h3 class="formtitle">Login</h3>
								
								<form action="" method="post">
									<!-- email -->
									<div class="form-group">
										<label class="text-white my-2">Email Address</label>
										<input type="text" class="form-control" name="email" placeholder="e.g.: example@gmail.com" required>
									</div>
										
									<!-- password -->
									<div class="form-group">
										<label class="text-white my-2">Password</label>
										<input type="password" class="form-control" name="password" placeholder="*****" required>
									</div>

									<!-- forgot password -->
									<!-- <p><i><a href="#" class="text-white-50">Forgot password</a></i></p> -->										
									<!-- login button -->
									<center>
										<button type="submit" class="btn btn-dark text-white col-10 my-4" name="loginBtn">Log in</button>
										<br>
										<p class="text-white-50">Don't have an account yet?<a href="signup.php" class="text-dark"><i> Sign up</i></a></p>
									</center>
									
									<!-- PHP CODE -->
									<?php
										if (isset($_REQUEST['loginBtn'])) 
										{
											$email = mysqli_real_escape_string($con, $_POST['email']);
											$password = mysqli_real_escape_string($con, $_POST['password']);

											$result = mysqli_query($con, "SELECT * FROM employee_tbl WHERE email='$email' AND password='$password'");

											if ($result) 
											{
												if (mysqli_num_rows($result)>0) 
												{
													?>
														<script type="text/javascript">
															alert("You have successfully logged in to your account!");
															window.location = 'assets/images/1.jpg';
														</script>
													<?php
												}
												else
												{
													?>
														<script type="text/javascript">
															alert("Incorrect email and/or password!");
															window.location = 'index.php';
														</script>
													<?php
												}
											}
										}
									?>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<!-- Fontawesome Bundle -->
	<script src="https://kit.fontawesome.com/0b5cc4708b.js" crossorigin="anonymous"></script>

	<!-- JS Bundle -->
	<script type="text/javascript" src="assets\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>

</body>

</html>