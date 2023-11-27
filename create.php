<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "newbase";
$con = mysqli_connect ($dbhost, $dbuser, $dbpass, $db) or die($con);

$sql= "SELECT * FROM emploee";
$result = mysqli_query($con, $sql);

$sql= "INSERT INTO emploee (id,Firstname,lastname,email,age,username,password) VALUES 
('6','George','papadopopoulos','george@example.com','34','gpapad', '6789')";



if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
 

