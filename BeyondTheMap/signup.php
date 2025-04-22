<?php
	include("dbconnect.php");
	$sql = "SHOW TABLE STATUS LIKE 'employee_tbl'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css bootstrap -->
		<link rel="stylesheet" type="text/css" href="assets\bootstrap-5.0.2-dist\css\bootstrap.min.css">

	<!-- external css -->
		<link rel="stylesheet" type="text/css" href="assets\formstyle.css">

	<!-- google fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,600&family=Roboto&display=swap" rel="stylesheet">

	<title>Sign up</title>
	
</head>

<body>

	<div class="container-fluid text-white custom-bar">
		<!-- <h5 style="margin-left: 20px;">
			BeyondTheMap
		</h5> -->
	</div>
	
	<div class="container my-5">
			<div class="row d-flex">

				<div class="col-md-5 d-flex flex-column justify-content-center pe-5 text-white quotesection">
				      <h1 class="display-4 fw-bold">
				      		READY TO BEGIN
				      		YOUR ADVENTURE?
				      </h1>
				      <p class="lead">Start your journey with us by creating an account. It's quick and easy.</p>
				</div>

				<div class="col-7">
					<div class="card show mx-auto">
						<!-- signup form -->
						<div class="container">
							<div class="login-form">
								<h3 class="formtitle">Sign up</h3>
								
								<form action="#" method="post">
									<!-- employee number id (employeeid) -->
									<div class="form-group">
										<div class="row">
											<div class="col">
												<label class="text-white my-2">Employee No.</label>
												<input type="text" class="form-control" name="employeeid1" value="<?php echo $row['Auto_increment']; ?>" disabled>
		      									<input type="hidden" class="form-control" name="employeeid" value="<?php echo $row['Auto_increment']; ?>">
	      									</div>

	      									<div class="col"></div>
	      									<div class="col"></div>
	      								</div>
									</div>
									<hr style="background-color: white;">
																			
									
									<div class="form-group">
										<div class="row">
											<h5 class="text-white my-2">Personal Information</h5>

											<!-- name (fname,mname,lname) -->	
											<label class="text-white my-2">Name</label>
								    		<div class="col">
								      			<input type="text" class="form-control" placeholder="First Name" name="fname" required>
								    		</div>
								    		
								    		<div class="col">
								      			<input type="text" class="form-control" placeholder="Middle Name" name="mname"required>
								    		</div>
								    	
								    		<div class="col">
								      			<input type="text" class="form-control" placeholder="Last Name" name="lname" required>
								    		</div>
									</div>

									<!-- sex -->
									<div class="form-group">
										<div class="row">
											<!-- sex -->
								    		<div class="col">
								    			<label class="text-white my-2">Sex</label>
								      			<select class="form-select" name="sex" required>
  													<option selected>Click to select sex</option>
														  <option value="Male">Male</option>
														  <option value="Female">Female</option>
												</select>
								    		</div>
								    	</div>
								    </div>

								    <div class="form-group">

								    <!-- address -->
										<label class="text-white my-2">Home address</label>
										<input type="text" class="form-control" name="address" placeholder="123 Main Street" required>
									</div>

								    <div class="form-group">
										<div class="row">
										<!-- email -->
								    		<div class="col">
								    			<label class="text-white my-2">Email</label>
								      			<input type="text" class="form-control" name="email" placeholder="e.g.: example@gmail.com" required>
								    		</div>
								    		
								    	<!-- contact num -->
								    		<div class="col">
								    			<label class="text-white my-2">Contact Number</label>
								      			<input type="text" class="form-control" placeholder="09*********" name="contact" required>
								    		</div>
								    	</div>
									</div>

									<br>

									<div class="form-group">
										<div class="row">
										<h5 class="text-white my-2">Employee Information</h5>

										<!-- employee position -->
								    		<div class="col">
								    			<label class="text-white my-2">Work Position</label>
								      			<select class="form-select" name="position" required>
  													<option selected>Click to select position</option>
														  <option value="Admin">Admin</option>
														  <option value="Employee">Employee</option>
												</select>
								    		</div>	
								    		
								    	<!-- salary -->	
								    		<div class="col">
								    			<label class="text-white my-2">Monthly salary</label>
								      			<input type="text" class="form-control" placeholder="e.g. 10000" name="salary" required>
								    		</div>
								    	</div>
									</div>

									<div>
									<!-- username -->
										<label class="text-white my-2">Username</label>
										<input type="text" class="form-control" name="username" required>
									</div>

									<div>
									<!-- password -->
										<label class="text-white my-2">Password</label>
										<input type="password" class="form-control" name="password" required>
									</div>

									<div>
									<!-- confirm password -->
										<label class="text-white my-2">Confirm Password</label>
										<input type="password" class="form-control" name="conpassword" required>
									</div>

									<br>
																			
									<!-- Signup button -->
									<center>
										<button type="submit" class="btn btn-dark text-white col-10 my-4" name="signupBtn">Create Account</button>
										<br>
									</center>
									
									<!-- PHP CODE -->
									<?php
										if(isset($_REQUEST['signupBtn']))
										{
											$employeeid = $_POST['employeeid'];
											$fname = mysqli_real_escape_string($con, $_POST['fname']);
											$mname = mysqli_real_escape_string($con, $_POST['mname']);
											$lname = mysqli_real_escape_string($con, $_POST['lname']);
											$sex = mysqli_real_escape_string($con, $_POST['sex']);
											$address = mysqli_real_escape_string($con, $_POST['address']);
											$email = mysqli_real_escape_string($con, $_POST['email']);
											$contact = mysqli_real_escape_string($con, $_POST['contact']);
											$position = mysqli_real_escape_string($con, $_POST['position']);
											$salary = mysqli_real_escape_string($con, $_POST['salary']);
											$username = mysqli_real_escape_string($con, $_POST['username']);
											$password = mysqli_real_escape_string($con, $_POST['password']);
											$conpassword = mysqli_real_escape_string($con, $_POST['conpassword']);

											$number = preg_match('@[0-9]@', $password);
											$letter = preg_match('@[A-Za-z]@', $password);
											$special = preg_match('@[^\w]@', $password);


												if($password == $conpassword)
												{
													$insert = mysqli_query($con, "INSERT INTO employee_tbl VALUES('', '$fname', '$mname', '$lname', '$sex', '$address', '$email', '$contact', '$position', '$salary', '$username', '$password', '$conpassword', now())");
													?>
														<script type="text/javascript">
															alert("You have successfully created your account");
															window.location = 'index.php';
														</script>
													<?php
												}
												else
												{
													?>
														<script type="text/javascript">
									                       	alert('Password does not match.');
									                        window.location = 'signup.php';
									                     </script>
													<?php
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