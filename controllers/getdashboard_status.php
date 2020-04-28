<?php 
@session_start();
require("connection.php");

 	if (isset($_SESSION['user'])) {
 		# code...

 		// $user_info = $_SESSION['user'];
 		// $user_id = $user_info['id'];

 		// $summary_query = "SELECT status.term as term, status.definition as definition, COUNT(DISTINCT user_id) as count FROM summary RIGHT JOIN status ON summary.status_id=status.id Group by status.term, status.definition Order By count desc;";
 		$summary_query = "SELECT c.term as term, c.definition as definition, COUNT(DISTINCT a.user_id)as count FROM (SELECT user_id as user_id, max(timestamp) as latest FROM `summary` GROUP by user_id) as a RIGHT JOIN summary as b ON a.latest=b.timestamp RIGHT JOIN status as c on b.status_id = c.id Group by c.term, c.definition Order By count desc";
 		$summary_array = mysqli_query($conn, $summary_query);


 		
 	}

?>
	

<?php foreach ($summary_array as $summary): ?>

	<div class="col-md-3 d-flex align-items-stretch">
		<div class="card mb-2 card-styling">
			<div class="card-body text-center">
				<h1><?php echo $summary['count']; ?></h1>
				<h4 class="card-title"><?php echo $summary['term'] ?></h4>
				<hr>
				<small>Total number of registered users under</small>
				<h6 class="card-sub-title text-muted"><?php echo $summary['definition']; ?></h6>
			</div>
		</div>
	</div>

	
<?php endforeach ?>


