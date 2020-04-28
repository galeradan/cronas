<?php 
@session_start();
require("connection.php");

 	if (isset($_SESSION['user'])) {
 		# code...

 		$user_info = $_SESSION['user'];
 		$user_id = $user_info['id'];

 		$summary_query = "SELECT * FROM summary where user_id = $user_id order by timestamp desc";
 		$summary_array = mysqli_query($conn, $summary_query);
 		
 	}

 	$lastDate = null;
?>
	

	<?php foreach ($summary_array as $summary): ?>

		<?php 


			// get status id from stored summary
			$status_id = $summary['status_id'];
			$session_id = $summary['session_id'];

			// get info of stored status_id
			$stored_status_query = "SELECT * FROM status where id = $status_id";
			$stored_status_result = mysqli_query($conn, $stored_status_query);
			$stored_status_info = mysqli_fetch_assoc($stored_status_result);

			$date = date("F jS, Y",  strtotime($summary['timestamp']));

			

		?>

		<div class="col-md-8">

		<!-- Logic to group to date -->
		<?php if (is_null($lastDate) || $lastDate !== $date): ?>
			<h6 class="text-center mb-3"><span class="date-styling py-1 bg-base"><?php echo "$date"; ?></span></h6>
		<?php endif ?>
		<?php $lastDate = $date; ?>

		<!-- end of logict -->

		<!-- start of card -->
			
				<div class="card mb-4 card-styling">
				<!-- HTML for Result and Date -->
				<div class="card-body">
				<h2><?php echo $stored_status_info['term']; ?> </h2>
				<h6>Based on your submitted responses you are a <?php echo $stored_status_info['definition']; ?></h6>
				<small><?php echo date("F jS, Y g:i a", strtotime($summary['timestamp'])); ?></small>
				<hr>
				<h4>Recommendation:</h4>
				<ul class="list-group">
					<li class="list-group-item"><?php echo $stored_status_info['recommendation']; ?> </li>
				</ul>

				<?php 
					// get info of session/answers
					$stored_session_query = "SELECT * FROM answers where session_id = '$session_id'";
					$stored_session_array = mysqli_query($conn, $stored_session_query);

					
				 ?>
				 <h4 class="mt-2">Your Responses:</h4>
					 <ul class="list-group">
						 <?php foreach ($stored_session_array as $stored_session): ?>

						 	<?php 

						 		$question_id = $stored_session['question_id'];
						 		$choice_id = $stored_session['choice_id'];

						 		// get question title query
						 		$question_query = "SELECT * FROM questions where id = $question_id";
						 		$question_result = mysqli_query($conn, $question_query);
						 		$question_info = mysqli_fetch_assoc($question_result);

						 		// set  question Title
						 		$questionTitle = $question_info['question'];

						 		// get choice title query
						 		$choice_query = "SELECT * FROM choices where id = $choice_id";
						 		$choice_result = mysqli_query($conn, $choice_query);
						 		$choice_info = mysqli_fetch_assoc($choice_result);

						 		// set choice title
						 		$choiceTitle = $choice_info['choice'];

						 	?>


						 	<!-- HTML for QUestion and Answer in Profile Page -->
						 	<li class="list-group-item"><?php echo $questionTitle; ?>
						 		<ul class="list-group list-group-flush">
						 			<li class="list-group-item font-base"> <span class="card-sub-title">Answer:</span> <?php echo $choiceTitle; ?></li>
						 		</ul>
						 	</li>
						  <?php endforeach ?>	
					</ul>

					
					</div>
				</div>
			</div>
			<!-- end of column -->

	<?php endforeach ?>	