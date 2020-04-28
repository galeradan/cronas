<?php session_start(); 

 if (isset($_SESSION['user'])) {
 	# code...
 	$user_info = $_SESSION['user'];
 	$role_id = $user_info['role_id'];
 }

?>
<!DOCTYPE html>
<html>
<head lang="en">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="icon" type="image/png" href="../assets/images/favicon.png">
	<title>CronaS | <?php echo getTitle(); ?></title>

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<!-- external stylesheet -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>


	<nav class="navbar navbar-expand-lg nav-styling navbar-light bg-neutral fixed-top">
	  <a class="navbar-brand" id="logo" href="./home.php">
	  	<img src="../assets/images/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
	  	<strong>CronaS</strong>
	  </a>
	  <?php if (isset($_SESSION['user'])): ?>
	  			
	  			  <a class="nav-brand">
	  				  	<?php 
	  				  		$name = $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name'];

	  				  		if ($_SESSION['user']['role_id'] == 1){
	  				  			echo "$name | <small>Admin</small>";
	  				  		}
	  				  		else{
	  				  			echo "$name | <small>Regular</small>";
	  				  		}
	  				  	?>
	  			  </a>		
	  	<?php else: ?>
	  		
	  			  <a class="nav-brand">
		  			<?php if ($currentPage == "screener"): ?>
		  				<?php echo "Anonymous User | <small>Guest</small>"; ?>
		  			<?php endif ?>
	  			  </a>
	  	
	  	<?php endif ?>


	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarNavDropdown">	

	  	<!-- Shows Name if user's login -->
	  	<ul class="navbar-nav mr-auto">
	  		
	  		
	  		 

	  		

	  			

	  	</ul>

	  	<!-- Shows logout if logged in -->
	  	<ul class="navbar-nav ml-auto">

	  		<?php if ($currentPage == 'screener' || $currentPage == 'home'): ?>
	  			
	  		<?php else: ?>
	  			<li class="nav-item <?php if($currentPage == 'screener' || $currentPage == 'screener_lp'){echo "active";} ?>">
	  			  <a class="nav-link" href="./screener.php">Screener</a>
	  			</li>
	  		<?php endif ?>
	  		
		<?php if (isset($_SESSION['user'])): ?>

			<li class="nav-item <?php if($currentPage == 'profile'){echo "active";} ?>">
	  		  <a class="nav-link" href="./profile.php">Profile</a>
	  		</li>

	  		<?php if ($_SESSION['user']['role_id'] == 1): ?>
	  			<li class="nav-item <?php if($currentPage == 'dashboard'){echo "active";} ?>">
	  			  <a class="nav-link" href="./dashboard.php">Dashboard</a>
	  			</li>
	  		<?php endif ?>

		  	<li class="nav-item ">
	  		  <a class="nav-link" href="../controllers/logout.php">Logout</a>
	  		</li>

		<?php else: ?>

			<li class="nav-item <?php if($currentPage == 'register'){echo "active";} ?>">
	  		  <a class="nav-link" href="./register.php">Register</a>
	  		</li>

	  		<li class="nav-item <?php if($currentPage == 'login'){echo "active";} ?>">
	  		  <a class="nav-link" href="./login.php">Login</a>
	  		</li>
	  		

		<?php endif ?>  		

	  		
	    </ul>
	  </div>
	</nav>

	<div class="wrapper after-nav d-flex flex-column align-items-stretch">
		<main class="content container-fluid pt-3 pb-3">