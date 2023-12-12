<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "newbase";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die($con);

// Εισαγωγή πρώτης εγγραφής
$sql1 = "INSERT INTO emploee (Firstname, lastname, email, age, username, password) VALUES 
('Maria','Manou','maria@example.com','58','Mmanou', '7890'),
('Eua','Euaggelou','eua@example.com','23','eyaa', '8900'),
('Sakis','Spanos','sakis@example.com','30','Sakiss', '7890'),
('Stella','Stergiou','stella@example.com','25','Stellast', '7890'),
('Lia','Linou','lia@example.com','30','Linoul', '7890')";

if (mysqli_multi_query($con, $sql1)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
}

// Εισαγωγή δεύτερης εγγραφής
$age = rand(18, 50);
$age1 = rand(18, 50);
$age2 = rand(18, 50);
$age3 = rand(18, 50);
$age4 = rand(18, 50);

$sql2 = "INSERT INTO emploee (Firstname, lastname, email, age, username, password) VALUES 
('Marios','papad','maria@example.com','$age','marios', '7890'),
('Giwrgos','Georgiou','eua@example.com','$age1','giwrgosg', '8900'),
('Giwta','Giwta','giwta@example.com','$age2','Giwtaa', '0909'),
('Xristos','Xristou','xristos@example.com','$age3','Sxristos', '5465'),
('Giannis','papad','giannis@example.com','$age4','giannisp', '7865')";

if (mysqli_multi_query($con, $sql2)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}


$sql3= "UPDATE emploee SET Firstname='Thalia', lastname ='giwta',  email = 'thalia@example.com', username ='thaliag' WHERE id=8";


if (mysqli_multi_query($con, $sql3)) {
  echo "Record update successfully";
} else {
  echo "Error updating record: " . $sql . "<br>" . mysqli_error($con);
}



// Διαγραφή εγγραφών με μονό αριθμητικό id
$sql4 = "DELETE FROM emploee WHERE id % 2 =! 0";

if (mysqli_query($con, $sql4)) {
    echo "Επιτυχής διαγραφή εγγραφών";
} else {
    echo "Σφάλμα κατά τη διαγραφή: " . mysqli_error($con);
}


mysqli_close($con);
?>
