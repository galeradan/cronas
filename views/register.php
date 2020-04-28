<?php 
$currentPage = "register";
require '../partials/header.php';


if (isset($_SESSION['user'])) {
		// isset -> it checks the variable if it is already set, or declared.
		header("Location: ./profile.php");
	}

function getTitle(){
		return "Register";
	}

?>
			<div class="row">
				<div class="col-md-6 mx-auto">

					<!-- the action attribute sets the destination to which the form data is submitted. the value of this can be an absolute/relative url -->

					<!-- the method attribute specifies the type <object></object>f http request you want to make when sending the form data -->
					
					<h2 class="font-base">Register</h2>
					<small class="text-muted">Already have an account? <a href="./login.php">Login here</a></small>
					
					<hr>
					<form action="../controllers/register_user.php" method="POST" id="registerForm">
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label for="fName">First Name</label>
									<input id="fName" type="text" name="firstName" class="form-control">
								</div>
								<div class="col-md-4">
									<label for="lName">Last Name</label>
									<input id="lName" type="text" name="lastName" class="form-control">
								</div>
								<div class="col-md-4">
									<label for="age">Age</label>
									<input id="age" type="number" name="age" class="form-control">
								</div>
							</div>
							
						</div>
						<!-- end of form-group -->
						
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="email">Email</label>
									<input id="email" type="email" name="email" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="username">Username</label>
									<input id="username" type="text" name="username" class="form-control">
								</div>
							</div>
						</div>
						<!-- end of form-group -->

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="password">Password</label>
									<input id="password" type="password" name="password" class="form-control">
								</div>

								<div class="col-md-6">
									<label for="confirm">Confirm Password</label>
									<input id="confirm" type="password" name="confirmPassword" class="form-control">
								</div>
							</div>	
						</div>
						<!-- end of form-group -->

						<!-- type submit will submit the form -->
						<small class="text-muted">We'll never share your information without your permission</small>
						
						<hr>
						
						<div id="alert" class="alert alert-warning" role="alert">
							  <strong>Something went wrong!</strong> Please check your fields.
						</div>
						<div class="form-group text-right">
							<button id="btnRegister" type="button" class="btn btn-styling bg-accent font-neutralw">Register</button>
						</div>
					</form>
				</div>
			</div>


		
			
		

<?php 

require '../partials/footer.php'

?>

<!-- External Script -->
<script type="text/javascript" src="../assets/js/register.js"></script>	