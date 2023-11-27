
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "newbase";
$con = mysqli_connect ($dbhost, $dbuser, $dbpass, $db) or die($con); 



$sql = "SELECT * FROM emploee";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["Firtname"]. " " . $row["lastname"].  " - email: " . $row["email"]. " - age: " . $row["age"]. " - username: " . $row["username"]. " - password: " . $row["password"]. "\n\n" ;
  }
} else {
  echo "0 results";
}

mysqli_close($con);
?>
