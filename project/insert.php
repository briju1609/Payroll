<?php

 	//require_once 'project_db.php';
 	//require_once 'insertForm.php';
 	//$sql = "USE c0707229_brijesh";
 	
	//include 'project_db.php';	

	
 	$firstname = "";
 	$lastname = "";
 	$id=0;

 	
 	$db = mysqli_connect('localhost', 'root', '', 'c0707229_brijesh');
 	
 	if (isset($_POST['submit'])){
 		$firstname = $_POST['firstname'];
 		$lastname = $_POST['lastname']; 
 		
 		$query = "INSERT INTO Employee (firstname, lastname) VALUES ('$firstname', '$lastname')";
 		mysqli_query($db, $query);
 		//header('location: Database.php'); 		
 	}
 	 	
 
?>