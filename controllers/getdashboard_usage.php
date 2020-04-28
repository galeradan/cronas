<?php 
@session_start();
require("connection.php");

    if (isset($_SESSION['user'])) {


      $userCount_query = "SELECT COUNT(DISTINCT id) as count FROM `users`";
      $userCount_result = mysqli_query($conn, $userCount_query);
      $userCount_info = mysqli_fetch_assoc($userCount_result);

    	$guestCount_query = "SELECT COUNT(DISTINCT session_id) as count FROM `guest`";
    	$guestCount_result = mysqli_query($conn, $guestCount_query);
    	$guestCount_info = mysqli_fetch_assoc($guestCount_result);


      $active_userCount_query = "SELECT COUNT(DISTINCT user_id) as count FROM `summary`";
      $active_userCount_result = mysqli_query($conn, $active_userCount_query);
      $active_userCount_info = mysqli_fetch_assoc($active_userCount_result);

	
     }


 ?>


  <div class="col-md-3 d-flex align-items-stretch">
    <div class="card mb-2 card-styling">
      <div class="card-body text-center">
        <h1><?php echo $userCount_info['count']; ?></h1>
        <h4 class="card-title">Registered Users</h4>
        <hr>
        <small>Total count of registered users</small>
      </div>
    </div>
  </div>

  <div class="col-md-3 d-flex align-items-stretch">
    <div class="card mb-2 card-styling">
      <div class="card-body text-center">
        <h1><?php echo $active_userCount_info['count']; ?></h1>
        <h4 class="card-title">Active Users</h4>
        <hr>
        <small>Total count of registered users with a usage</small>
      </div>
    </div>
  </div>

  <div class="col-md-3 d-flex align-items-stretch">
  	<div class="card mb-2 card-styling">
  		<div class="card-body text-center">
  			<h1><?php echo $guestCount_info['count']; ?></h1>
  			<h4 class="card-title">Guests Usage</h4>
  			<hr>
  			<small>Total count of usage from guest</small>
  		</div>
  	</div>
  </div>

  