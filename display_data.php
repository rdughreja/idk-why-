<!DOCTYPE html>
<html>

<head>
    <title>Student Data</title>
</head>

<body>
    <h2>Student Data</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date of Birth</th>
            <th>Registration Date</th>
        </tr>

        <?php
// Connect to the database (update with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Display data in a table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['birth_date'] . "</td>";
        echo "<td>" . $row['registration_date'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
        
</body>

</html>


