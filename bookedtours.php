<!DOCTYPE html>
<html>
<head>
    <title>Booked HotelsTours</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .delete-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    

    <form method="POST" action="">
<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "travel";

// Connect to the database
$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

// Check if the Delete button is clicked
if (isset($_POST['delete'])) {
    // Get the IDs of the checked rows
    $selectedIDs = $_POST['selectedIDs'];

    // Delete the selected rows from the database
    foreach ($selectedIDs as $id) {
        $deleteQuery = "DELETE FROM tourbookings WHERE id = $id";
        $mysqli->query($deleteQuery);
    }
}

// Retrieve bookings from the database
$query = "SELECT * FROM tourbookings";
$result = $mysqli->query($query);

// Display bookings
if ($result->num_rows > 0) {
    echo "<h1>Tour Bookings</h1>";
    echo "<form method='POST' action=''>";
    echo "<table>";
    echo "<tr><th></th><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Destination</th><th>Travel Date</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><input type='checkbox' name='selectedIDs[]' value='" . $row["id"] . "'></td>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["destination"] . "</td>";
        echo "<td>" . $row["travel_date"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<input type='submit' name='delete' value='Delete'>";
    echo "</form>";
} else {
    echo "No bookings found.";
}

// Close the database connection
$mysqli->close();
?>
</body>
</html>
