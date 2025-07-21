<?php
include 'db.php';
$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);

echo "<h2>Doctors List</h2>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Specialization</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['specialization']}</td>
    </tr>";
}
echo "</table>";
?>
