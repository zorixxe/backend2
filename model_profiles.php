<?php
$sql = "SELECT * FROM profiles";
$stmt = $conn->query($sql); // query metoden av mysqli objektet returnerar mysqli_result objektet

// mysqli_result objektet har en egenskap som heter num_rows
if ($stmt->num_rows > 0) { 
    while($row = $stmt->fetch_assoc()) {
        print("Användarnamn: " . $row['username']);
    }
}

// ToDo: Kör SQL kod på databasen