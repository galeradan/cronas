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
		<small>Admins can check the usage overview here</small>
		<hr>
	</div>
</div>
	
<div id="result-receiver" class="row d-flex justify-content-center ">
	
	<?php require('../controllers/getdashboard.php'); ?> 

</div>







<?php 
require_once('../partials/footer.php');
?>


<!-- External Script -->
<script type="text/javascript" src="../assets/js/profile_screener.js"></script>