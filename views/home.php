<?php 
$currentPage = "home";
require '../partials/header.php';

function getTitle() {
		return "Home";
	}

?>


<!-- <section class="home vh-90 bg-accent d-flex flex-column align-items-center text-center">
	<div class="row v-center">
		<div class="col-md-12">
			<h3 class="font-neutralw">Together, let's conquer COVID-19!</h3>
			<button id="btnScreen" class="btn btn-styling bg-accent font-neutralw">Screener</button>
		</div>
	</div>
</section> -->


<div class="home pt-4 vh-90 row justify-content-center">
			<div class="col-md-4 d-flex flex-column justify-content-center">
				<img src="../assets/images/svg3.svg" class="img-fluid img-max-h">
			</div>
			<div class="col-md-5 d-flex flex-column justify-content-center">
				<h4 class="font-neutralb text-center">TOGETHER, LET'S CONQUER COVID-19!</h4>
				<button id="btnScreen" class="btn btn-styling bg-accent font-neutralw">Start Screening</button>
			</div>
		</div>

<!-- External Script -->
<script type="text/javascript" src="../assets/js/home.js"></script>

<?php 

require_once('../partials/footer.php');

?>