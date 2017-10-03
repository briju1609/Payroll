<?php

	require_once 'project_db.php';

	echo "<br><br>";
	echo "<h2>Data</h2>";

	$sql = "SELECT * FROM Employee";
	$result = $conn->query($sql);
?>
<table border="1">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Birthday</th>
<th>Address</th>
<th>City</th>
<th>Province</th>
<th>Email</th>
<th>Weblink</th>
<th>Pay</th>
</tr>
<?php
	if ($result->num_rows > 0) {
    	// output data of each row
   	 while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo "<tr>";
        echo "<td>";
        	echo $row['firstname'];
        echo "</td>";
        echo "<td>";
        echo $row['lastname'];
        echo "</td>";
        echo "<td>";
        echo $row['gender'];
        echo "</td>";
        echo "<td>";
        echo $row['birthday'];
        echo "</td>";
        echo "<td>";
        echo $row['address'];
        echo "</td>";
        echo "<td>";
        echo $row['city'];
        echo "</td>";
        echo "<td>";
        echo $row['province'];
        echo "</td>";
        echo "<td>";
        echo $row['email'];
        echo "</td>";
        echo "<td>";
        echo $row['weblink'];
        echo "</td>";
        echo "<td>";
        echo $row['pay'];
        echo "</td>";
        echo "</tr>";
        
    }
	} else {
   	 echo "0 results";
	}
	
	
	
		
	//$stmt->close();
	$conn->close();
?>
</table>
