<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "newbase";
$con = mysqli_connect ($dbhost, $dbuser, $dbpass, $db) or die($con);



$sql= "UPDATE emploee SET Firstname='Makis',  email = 'Makis@example.com' WHERE id=2";


if (mysqli_query($con, $sql)) {
  echo "Record update successfully";
} else {
  echo "Error updating record: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
