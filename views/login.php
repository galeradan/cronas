<?php 
$currentPage = "login";
require '../partials/header.php';

	if (isset($_SESSION['user'])) {
		// isset -> it checks the variable if it is already set, or declared.
		header("Location: ./profile.php");
	}

function getTitle(){
		return "Login";
	}

?>
	
		<div class="row">
			<div class="col-md-6 mx-auto">
				<h2 class="font-base">Login</h2>
				<small class="text-muted">Dont have an account? <a href="./register.php">Register here</a></small>
				<hr>
				<form action="../controllers/auth.php" method="POST" id="authlogin">
					<div class="form-group">
						<label for="email">Email</label>
						<input id="email" type="text" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input id="password" type="password" name="password" class="form-control">
					</div>
					
					<small class="text-muted">Make sure your email and password is correct.</small>
					<hr>
					
				</form>
				<div id="alert" class="alert alert-warning" role="alert">
					  <strong>Something went wrong!</strong> Please check your fields.
				</div>

				<div class="form-group text-right">
					<button id="login" type="submit" class="btn btn-styling bg-accent font-neutralw">Login</button>
					<!-- <span>Or</span>
					<button id="guest" type="submit" class="btn btn-styling bg-accent font-neutralw">As Guest</button> -->
				</div>

				<div class="form-group text-right">
					
				</div>

				<!-- <div class="form-group text-right">
					<button type="submit" class="btn btn-styling bg-accent font-neutralw">Guest</button>
				</div> -->
			</div>
		</div>

	
<?php 

require '../partials/footer.php'

?>

<!-- External Script -->
<script type="text/javascript" src="../assets/js/login.js"></script>
