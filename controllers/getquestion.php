<?php 
@session_start();
require("connection.php");

	$last_question = null;
	$status = null;
	$session_id = session_id();
	$answer_saved = false;
	


	// Detects if there's already a current chosenID monitors progress
	if (isset($_SESSION['currentChosenID'])) {
		# code...

		// Detects if there's current thrown chosen ID from user, if none use sessions currentChosenID
		if (isset($_POST['chosenID'])) {
			# code...
		}else{
		 $_POST['chosenID'] = $_SESSION['currentChosenID'];
		 $answer_saved = true;
		}

	}else{

	}



	if(isset($_POST['chosenID'])){
		$chosenID = $_POST['chosenID'];
		$_SESSION['currentChosenID'] = $chosenID;

		// get info of chosen choice 
		$chosen_query = "SELECT * FROM choices where id = $chosenID";
		$chosen_result = mysqli_query($conn, $chosen_query);
		$chosen_info = mysqli_fetch_assoc($chosen_result);

		// store info into variables
		$last_question = $chosen_info['last_question'];
		$status_id = $chosen_info['status_id'];
		$next_question = $chosen_info['next_sequence'];
		$prev_question = $chosen_info['question_id'];
		

		// get info of chosen status
		$status_query = "SELECT * FROM status where id = $status_id";
		$status_result = mysqli_query($conn, $status_query);
		$status_info = mysqli_fetch_assoc($status_result);

		// store into a variable
		$status = $status_info["value"];
		$statusTerm = $status_info["term"];
		$statusDefinition = $status_info["definition"];
		$statusRecom = $status_info["recommendation"];
		$statusID = $status_info["id"];


		// store to table answers
		if (isset($_SESSION['user']) && $answer_saved == false) {
			# code...
			$insert_query = "INSERT INTO answers(session_id, question_id, choice_id) VALUES ('$session_id', $prev_question, $chosenID);";

			$answer_result =mysqli_query($conn, $insert_query);

			if($answer_result){
				// echo "Successfully saved to database";

			}
			else{
				echo "Something's wrong";
				echo mysqli_error($conn);
			}
		}
		else{
			// echo "Di kita i save HAHAHA";
		}

		


	}
	else{
		// $chosenID = 1;
		$next_question = 1;
		$last_question = false;
		
	}

	// Logic if status should be overwritten or retain
	if(isset($status)){
		if(isset($_SESSION['status'])) {
			if ($_SESSION['status'] > $status) {

			}
			else{
				$_SESSION['status'] = $status;
				$_SESSION['statusTerm'] = $statusTerm;
				$_SESSION['statusID'] = $statusID;
				$_SESSION['statusDefinition'] = $statusDefinition;
				$_SESSION['statusRecom'] = $statusRecom;
			}
		}else{
			$_SESSION['status'] = $status;
			$_SESSION['statusTerm'] = $statusTerm;
			$_SESSION['statusID'] = $statusID;
			$_SESSION['statusDefinition'] = $statusDefinition;
			$_SESSION['statusRecom'] = $statusRecom;
		}
	}else{
		// echo "wala pang status";
	}


	// Logic to get next question
	if ($last_question == false) {
		// get single results
		$question_query = "SELECT * FROM questions where id = $next_question";
		$question_result = mysqli_query($conn, $question_query);
		$question_info = mysqli_fetch_assoc($question_result);

		// set current question
		$currentQuestion = $question_info['id'];

		// get multiple results
		$choices_query = "SELECT * FROM choices where question_id = $currentQuestion";
		$choices_array = mysqli_query($conn, $choices_query);	

		$x = 0; 
	}else{
		// echo "Tapos na <br>";

		// echo $_SESSION['statusTerm'];
		// if($_SESSION['status'] == 1){
		// 	echo $_SESSION['status'] . " NOT PUM";
		// }else{
		// 	echo $_SESSION['status'] . " PUM Ka";
		// }
		
	}

	$date_now = date("Y-m-d");

?>
	<!-- logic to display next questions -->
	<?php if ($last_question == false): ?>
		
		<h5 id="question" class="mb-4"><?php echo $question_info['question'] ?></h5>
		<!-- <hr> -->

		<!-- logic to display choices of the questions -->
		<?php foreach ($choices_array as $choice): ?>

			<div id="options" class="form-check">
				<label for="<?php echo "radio".$x; ?>" class="form-check-label">
					<input type="radio" class="form-check-input" id="<?php echo "radio".$x; ?>" name="choices" value="<?php echo $choice['id'] ?>"> 
					<?php echo $choice['choice'] ?>
				</label>
			</div>

			<?php ++$x ?>

		<?php endforeach ?>	
	

	<!-- Logic to display summary if no more next question  -->
	<?php else: ?>


		<!-- start of logic displaying the info of summary -->
		<div class="card card-styling">
			<div class="card-body">
				<h2 class="card-title"><?php echo $_SESSION['statusTerm']; ?></h2>
				<h6 class="card-sub-title">Based on your submitted responses you are a <?php echo $_SESSION['statusDefinition']; ?></h6>
				<h4>Recommendation:</h4>
				<ul class="list-group">
					<li class="list-group-item"><?php echo $_SESSION['statusRecom']; ?> </li>
				</ul>
			</div>
		</div>

		<!-- logic to save information to database if registered user -->
		<?php 
			if (isset($_SESSION['user'])) {
				# code...
				$user_id = $_SESSION['user']['id'];
			

				$status_id = $_SESSION['statusID'];
				$insert_query = "INSERT INTO summary(session_id, status_id, user_id) VALUES ('$session_id', $status_id, $user_id);";

				$summary_result =mysqli_query($conn, $insert_query);

				if($summary_result){
					// echo "Successfully saved to database";
					// Reset Values
					session_regenerate_id();

					// var_dump($_SESSION);

					$_SESSION['currentChosenID'] = null;
					$_SESSION['status'] = null;
					$_SESSION['statusTerm'] = null;
					$_SESSION['statusID'] = null;
					
				}
				else{
					// echo "Something's wrong";
					// echo mysqli_error($conn);
				}
			}else{
				$status_id = $_SESSION['statusID'];
				$insertGuest_query = "INSERT INTO guest(session_id, status_id) VALUES ('$session_id', $status_id);";

				$summaryGuest_result =mysqli_query($conn, $insertGuest_query);

				if($summaryGuest_result){
					// echo "Successfully saved to database";
					// Reset Values
					// Reset Session Variables
					//destroy session
					session_regenerate_id();
					session_destroy();
				}
				else{
					echo "Something's wrong";
					echo mysqli_error($conn);
				}
				
			}
		?>
		<!-- end of inserting info to database -->




	<?php endif ?>
	<!-- end of logic -->
		



<?php 


// Set Session here


?>
