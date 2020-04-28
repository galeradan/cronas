<?php 
$currentPage = "screener";
require_once('../partials/header.php');

if (isset($_SESSION['user'])) {
	# code...
	$user_info = $_SESSION['user'];
	
}else{
	if ($_SESSION['visitedLP'] != true){
		header("Location: ./screener_lp.php");
	}else{
		$_SESSION['visitedLP'] = false;
		session_destroy();
	}
}

function getTitle() {
		return "Screener";
	}

?>


<section id="questions">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h2 id="title">Screener</h2>
			<small id="instruction">Please continue answering the questions below</small>
			<hr>
			<div id="question-receiver">
				<?php require('../controllers/getquestion.php'); ?>
			</div>			

			<hr>
			<div id="alert" class="alert alert-warning" role="alert">
				  <strong>Something went wrong!</strong> Please select an answer.
			</div>
			<small id="notice">Please answer the questions below</small>
			<div class="text-right">
				<button id="btnNext" class="btn btn-styling bg-accent font-neutralw" type="button">Next</button>
			</div>


			
		</div>
	</div>
</section>



<?php 
require_once('../partials/footer.php');
?>

<!-- External Script -->
<script type="text/javascript" src="../assets/js/getquestion.js"></script>



