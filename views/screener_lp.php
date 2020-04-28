<?php 
$currentPage = "screener_lp";
require '../partials/header.php';

	if (isset($_SESSION['user'])) {
		header("Location: ./screener.php");
	}

function getTitle(){
		return "Screener Landing Page";
	}

?>
		<div class="row justify-content-center">
			<div class="col-md-4 order-1 justify-content-center">
				<img src="../assets/images/svg2.svg" class="img-fluid img-max-h">
			</div>
			<div class="col-md-5 order-sm-1 d-flex flex-column justify-content-center">
				<!-- <div class="card card-styling">
					<div class="card-body"> -->

						<h2 class="card-title font-base">Hello!</h2>
						<h4 class="card-sub-title mt-3">To start screening, you have the following options:</h4>
						<ul class="list-group">
							<li class="list-group-item">
								<p class="text-muted m-0">Would you like to create an account? <a href="./register.php">Register here</a></p>
							</li>
							<li class="list-group-item">
								<p class="text-muted m-0">Do you have an exisiting account? <a href="./login.php">Login here</a></p>
							</li>

						</ul>
						
						<hr class="mb-0 mt-2">
						<div class="form-group text-center">
						<small class="text-muted">Notice: Guest users can't retrieve their results.</small>
							<button id="btnGuest" type="button" class="btn bg-accent font-neutralw btn-styling btn-block">Continue Screening as Guest</button>
						</div>
					<!-- </div>
				</div> -->

				
				
				<!-- <div class="form-group text-right">
					<button type="submit" class="btn btn-styling bg-accent font-neutralw">Guest</button>
				</div> -->
			</div>
		</div>
		

		<!-- External Script -->
		<script type="text/javascript" src="../assets/js/screener_lp.js"></script>

<?php 

require '../partials/footer.php'

?>