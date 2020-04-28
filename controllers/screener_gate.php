<?php 
@session_start();

$_SESSION['visitedLP'] = true;
header("Location: ../views/screener.php");

 ?>