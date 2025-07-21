<?php
include 'db.php';

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "INSERT INTO patients (name, age, gender) VALUES ('$name', '$age', '$gender')";
if ($conn->query($sql) === TRUE) {
    echo "Patient registered successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
