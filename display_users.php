<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve users
$sql = "SELECT id, fullname, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>User List</h1>";
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Email</th>
    </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["fullname"]. "</td>
        <td>" . $row["email"]. "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
