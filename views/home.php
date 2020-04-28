<?php 
$currentPage = "home";
require_once('../partials/header.php');

function getTitle() {
		return "Home";
	}

?>


<section class="home vh-90 bg-accent d-flex flex-column align-items-center text-center">
	<div class="row v-center">
		<div class="col-md-12">
			<h3 class="font-neutralw">Together, let's conquer COVID-19!</h3>
			<button id="btnScreen" class="btn btn-styling bg-accent font-neutralw">Screener</button>
		</div>
	</div>
</section>

<!-- External Script -->
<script type="text/javascript" src="../assets/js/home.js"></script>

<?php 

require_once('../partials/footer.php');

?>