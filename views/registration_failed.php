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





<div class="row justify-content-center">
			<div class="col-md-4 order-1 justify-content-center">
				<img src="../assets/images/svg4.svg" class="img-fluid img-max-h">
			</div>
			<div class="col-md-5 order-sm-1 d-flex flex-column justify-content-center">
				<h1 class="card-title font-accent">Uh-oh!</h1>
				<div id="alert" class="alert alert-warning" role="alert">
					  <strong>Sadly, the email you entered already exists</strong> 
				</div>
				<p>But DON'T give up yet! You can do the following</p>
				<ul class="list-group">
					<li class="list-group-item">
						<p class="text-muted m-0">Create an account and use a different email? <a href="./register.php">Register here</a></p>
					</li>
					<li class="list-group-item">
						<p class="text-muted m-0">Try to login using the existing email? <a href="./login.php">Login here</a></p>
					</li>

				</ul>
			</div>
		</div>


<?php 

require '../partials/footer.php'

?>
