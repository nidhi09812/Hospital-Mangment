<?php
include 'db.php';

$patient_id = $_POST['patient_id'];
$doctor_id = $_POST['doctor_id'];
$date = $_POST['date'];

$sql = "INSERT INTO appointments (patient_id, doctor_id, date) VALUES ('$patient_id', '$doctor_id', '$date')";
if ($conn->query($sql) === TRUE) {
    echo "Appointment booked!";
} else {
    echo "Error: " . $conn->error;
}
?>
