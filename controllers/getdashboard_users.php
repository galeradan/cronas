<?php 
@session_start();
require("connection.php");

 	if (isset($_SESSION['user'])) {
 		# code...

 		// $user_info = $_SESSION['user'];
 		// $user_id = $user_info['id'];

 		// $summary_query = "SELECT status.term as term, status.definition as definition, COUNT(DISTINCT user_id) as count FROM summary RIGHT JOIN status ON summary.status_id=status.id Group by status.term, status.definition Order By count desc;";
 		$usersSummary_query = "SELECT c.term as term, d.first_name as firstname, d.last_name as lastname FROM (SELECT user_id as user_id, max(timestamp) as latest FROM `summary` GROUP by user_id) as a LEFT JOIN summary as b ON a.latest=b.timestamp RIGHT JOIN status as c on b.status_id = c.id LEFT JOIN users as d on a.user_id = d.id Group by c.term, d.first_name, d.last_name";
 		$usersSummary_array = mysqli_query($conn, $usersSummary_query); 		
 	}

 	$x = 0;

?>
	
<div class="col-md-9 d-flex align-items-stretch">

	<table class="table text-center table-striped">
	  <thead class="thead-styling">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">First name</th>
	      <th scope="col">Last name</th>
	      <th scope="col">Current Status</th>
	    </tr>
	  </thead>
	  <tbody>

<?php foreach ($usersSummary_array as $users): ?>
		    <tr>
		      <th scope="row"><?php echo ++$x; ?></th>
		      <td><?php echo $users['firstname']; ?></td>
		      <td><?php echo $users['lastname']; ?></td>
		      <td><?php echo $users['term']; ?></td>
		    </tr>	
<?php endforeach ?>
	  </tbody>
	</table>
</div>

