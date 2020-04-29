<?php 
$currentPage = "dashboard";
require_once('../partials/header.php');

if (isset($_SESSION['user'])) {
	# code...
	$user_info = $_SESSION['user'];
	if ($user_info['role_id'] != 1) {
		# code...
		header("Location: ./profile.php");
	}
	
}else{
	$_SESSION['isGuest'] = true;
	header("Location: ./login.php");
	// echo "Guest User";

}

function getTitle() {
		return "Dashboard";
	}

?>



	<div class="row d-flex justify-content-center align-items-stretch">
		<div class="col-md-9">
			<h2>DASHBOARD</h2>
			<small>Admins can check the app's usage overview here</small>
			<hr>
		</div>
	</div>
		

	<div class="row d-flex justify-content-center align-items-stretch">
		<div class="col-md-9">
			<h5 class="mb-0 d-inline">Status Overview: </h5>
			<span class="align-text-bottom"><small>Total count of registered users according to their latest status</small></span>
			<hr class="mt-1">
		</div>
	</div>

	
	<div id="result-receiver" class="row d-flex justify-content-center ">
		<?php require('../controllers/getdashboard_status.php'); ?> 

	</div>

	<div class="row mt-2 d-flex justify-content-center align-items-stretch">
		<div class="col-md-9">
		<!-- <hr> -->
			<h5 class="mb-0 d-inline">Usage Overview: </h5>
			<span class="align-text-bottom"><small>The general usage of the app</small></span>
			<hr class="mt-1">
		</div>
	</div>
	
	<div id="result-receiver" class="row d-flex justify-content-center ">
		<?php require('../controllers/getdashboard_usage.php'); ?> 
	</div>


	<div class="row mt-2 d-flex justify-content-center align-items-stretch">
		<div class="col-md-9">
		<!-- <hr> -->
			<h5 class="mb-0 d-inline">Results Lists: </h5>
			<span class="align-text-bottom"><small>List of active users with their status</small></span>
			<hr class="mt-1">
			<input id="searchTable" class="form-control mr-sm-2" type="search" placeholder="Search name or status" aria-label="Search">
		</div>
	</div>
	
	<div id="result-receiver" class="row d-flex justify-content-center ">
		<?php require('../controllers/getdashboard_users.php'); ?> 
	</div>


<?php 
require_once('../partials/footer.php');
?>


<!-- External Script -->
<script type="text/javascript" src="../assets/js/getdashboard_searchuser.js"></script>