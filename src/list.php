<?php
require_once 'connect.php';
$db = new  Database();
$conn = $db->connect();
$query = "SELECT * FROM shop";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

$conn->close();
