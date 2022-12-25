<?php 
 
	$server="localhost"; 
	$user="root"; 
	$pass=""; 
	$db="animals_shop"; 
	 
    $connection = new mysqli($server, $user, $pass, $db);
    if ($connection->connect_error) {
        die('Connect Error (' . $connection->connect_errno . ') ' . $connection->connect_error);
    }
?>