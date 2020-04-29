<?php 
$currentPage = "profile";
require_once('../partials/header.php');

if (isset($_SESSION['user'])) {
	# code...
	$user_info = $_SESSION['user'];
	
}else{
	$_SESSION['isGuest'] = true;
	header("Location: ./login.php");
}

function getTitle() {
		return "Profile";
	}

?>



<div class="row d-flex justify-content-center ">
	<div class="col-md-8 ">
		<h2>PROFILE</h2>
		<small>Want to use the screener again? <a href="./screener.php">Click Here</a> </small>
		<hr>
	</div>
</div>

<div class="row d-flex justify-content-center ">
	<div class="col-md-8 mb-2 text-center">
		<h5 class="mb-0">History: </h5>
		<p class="mb-2"><small>You will see your previous results here</small></p>
		<!-- <hr class="mt-0"> -->
	</div>
</div>

<div id="result-receiver" class="row d-flex justify-content-center">
	
	<?php require('../controllers/getsummary.php'); ?>

</div>




<!-- External Script -->
<script type="text/javascript" src="../assets/js/goscreen_profile.js"></script>


<?php 
require_once('../partials/footer.php');
?>


<!-- External Script -->
<script type="text/javascript" src="../assets/js/profile_screener.js"></script>