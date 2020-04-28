<?php 
$currentPage = "login";
require '../partials/header.php';


if (isset($_SESSION['user'])) {
		// isset -> it checks the variable if it is already set, or declared.
		header("Location: ./profile.php");
	}

if (isset($_SESSION['is_loginError'])) {
	# code...
	$_SESSION['is_loginError'] = null;
}else{
	header("Location: ./login.php");
}

function getTitle(){
		return "Register";
	}

?>


<div class="row d-flex align-items-center ">
			<div class="col-md-6 mx-auto">
				<!-- <div class="card card-styling">
					<div class="card-body"> -->
						<h1 class="card-title font-accent">Uh-oh!</h1>
						<div id="alert" class="alert alert-warning" role="alert">
							  <strong><?php echo $_SESSION['erroMsg']; ?></strong> 
						</div>
						<p>But DON'T give up yet! You can do the following</p>
						<ul class="list-group">
							<li class="list-group-item">
								<p class="text-muted m-0">Create a new account and use a different email? <a href="./register.php">Register here</a></p>
							</li>
							<li class="list-group-item">
								<p class="text-muted m-0">Try again and make sure details are correct? <a href="./login.php">Login here</a></p>
							</li>

						</ul>
			</div>
		</div>



<?php 

require '../partials/footer.php'

?>
