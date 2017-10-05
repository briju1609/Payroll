
<?php
	
	echo "<h3>Information...</h3>";
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully" . "<br>";
	
	/*
	// Create databases
	$sql = "CREATE DATABASE c0707229_brijesh";
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . $conn->error . "<br>";
	}*/
	
	//Use database
	$sql = "USE c0707229_brijesh";
	if ($conn->query($sql) === TRUE) {
		echo "Database changed successfully . <br>";
	} else {
		echo "Error connecting database: " . $conn->error. " <br>";
	}
	
	
	/*
	// sql to create table
	$sql = "CREATE TABLE Employee (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		gender VARCHAR(6) NOT NULL,
		birthday DATE,
		address VARCHAR(60),
		city VARCHAR(15),
		province VARCHAR(15),
		email VARCHAR(60),
		weblink VARCHAR(60),
		reg_date TIMESTAMP,
		pay int(15)
		)";
	
	if ($conn->query($sql) === TRUE) {
		echo "Employee created successfully";
	} else {
		echo "Error creating table: " . $conn->error . "<br>";
	}
	
	
	//Insert using prepare
	$stmt = $conn->prepare("INSERT INTO Employee (firstname, lastname, gender, birthday, address,city, province, email, weblink, pay) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssssssi",$firstname, $lastname, $gender, $birthday, $address,$city, $province, $email, $weblink, $pay);
	
	// set parameters and execute
	//Record - 1
	$firstname = "Brijesh";
	$lastname = "Prajapati";
	$gender ="Male";
	$birthday = "1995-09-16";
	$address = "1442 Lawrence Ave W";
	$city = "Toronto";
	$province = "Ontario";
	$email = "prajapati.brijesh1995@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 2300;
	$stmt->execute();
	
	//Record - 2
	$firstname = "Nirav";
	$lastname = "Bodala";
	$gender ="Male";
	$birthday = "1995-09-16";
	$address = "Nanak House";
	$city = "Toronto";
	$province = "Ontario";
	$email = "nirav.bodala@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 3000;
	$stmt->execute();
	
	//Record - 3
	$firstname = "Max";
	$lastname = "Edam";
	$gender ="Male";
	$birthday = "1995-09-16";
	$address = "1 Pitfield Rd";
	$city = "Toronto";
	$province = "Ontario";
	$email = "max.edam789@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 1200;
	$stmt->execute();
	
	//Record - 4
	$firstname = "Kate";
	$lastname = "Perry";
	$gender ="Female";
	$birthday = "1995-09-16";
	$address = "Fountain Rd";
	$city = "Toronto";
	$province = "Ontario";
	$email = "kate.perry3@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 5600;
	$stmt->execute();
	
	//Record - 5
	$firstname = "Priya";
	$lastname = "Singh";
	$gender ="Female";
	$birthday = "1995-09-16";
	$address = "Nanak House";
	$city = "Toronto";
	$province = "Ontario";
	$email = "singhpriyanka@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 8000;
	$stmt->execute();
	
	//Record - 6
	$firstname = "Petty";
	$lastname = "Edams";
	$gender ="Female";
	$birthday = "1995-09-16";
	$address = "Downtown";
	$city = "Toronto";
	$province = "Ontario";
	$email = "petty.edams@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 4200;
	$stmt->execute();
	
	//Record - 7
	$firstname = "Vijendra";
	$lastname = "Singh";
	$gender ="Male";
	$birthday = "1995-09-16";
	$address = "Keele Street";
	$city = "Toronto";
	$province = "Ontario";
	$email = "vsingh@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 8900;
	$stmt->execute();
	
	//Record - 8
	$firstname = "Aashi";
	$lastname = "Patel";
	$gender ="Female";
	$birthday = "1995-09-16";
	$address = "Lawrence";
	$city = "Toronto";
	$province = "Ontario";
	$email = "aashi1995@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 2930;
	$stmt->execute();
	
	//Record - 9
	$firstname = "Joy";
	$lastname = "Roy";
	$gender ="Male";
	$birthday = "1995-09-16";
	$address = "Dufferin St";
	$city = "Toronto";
	$province = "Ontario";
	$email = "joy.roy1234@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 5600;
	$stmt->execute();
	
	//Record - 10
	$firstname = "Niral";
	$lastname = "Singh";
	$gender ="Male";
	$birthday = "1995-09-16";
	$address = "Wilson Rd";
	$city = "Toronto";
	$province = "Ontario";
	$email = "niral.singh1234@gmail.com";
	$weblink = "https://www.google.com";
	$pay = 4500;
	$stmt->execute();
	
	
	
	//if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	/* } else {
	 echo "Error: " . $sql . "<br>" . $conn->error;
	 }
	
	
	
		*/
	 /*
	function Update(){
	        // sql to delete a record
	     $emp_id = $_GET['id'];
	            
	            $sql = "DELETE FROM Employee WHERE id = $emp_id" ;
	            mysql_select_db('c0707229_brijesh');
	            $retval = mysql_query( $sql, $conn );
	            
	            if(! $retval ) {
	               die('Could not delete data: ' . mysql_error());
	            }
	            
	            echo "Deleted data successfully\n";
	        }*/
?>