<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "newbase";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die($con); 

// Επιλογή δεδομένων από τον πρώτο πίνακα
$query = "SELECT * FROM emploee";
$result = mysqli_query($con, $query);

// Ελέγχουμε αν το αποτέλεσμα είναι ένα αντικείμενο mysqli_result
if ($result !== false && mysqli_num_rows($result) > 0) {
    // Επεξεργασία όλων των γραμμών του αποτελέσματος
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $Firstname = $row['Firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $age = $row['age'];
        $username = $row['username'];
        $password = $row['password'];

        // Εισαγωγή δεδομένων στον δεύτερο πίνακα
        $queryInsert = "INSERT INTO emploee5 (id, Firstname, lastname, email, age, username, password) VALUES ('$id' ,'$Firstname' ,'$lastname' ,'$email' ,'$age' ,'$username' ,'$password' )";
        $resultInsert = mysqli_query($con, $queryInsert);

        // Ελέγχουμε το αποτέλεσμα της εισαγωγής
        if ($resultInsert === false) {
            echo "Error in INSERT query: " . mysqli_error($con);
        }
    }
} else {
    // Εκτύπωση μηνύματος σφάλματος
    echo "Error in SELECT query: " . mysqli_error($con);
}

// Κλείσιμο σύνδεσης
$con->close();
?>
