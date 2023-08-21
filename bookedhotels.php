<!DOCTYPE html>
<html>
<head>
    <title>Booked Hotels</title>
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
    <h1>Booked Hotels</h1>

    <form method="POST" action="">
        <?php
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'travel');

        // Check the database connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve the booked hotels data from the database
        $sqlRetrieveBookings = "SELECT * FROM hotelbooking";
        $result = mysqli_query($conn, $sqlRetrieveBookings);

        if (mysqli_num_rows($result) > 0) {
            // Display the booked hotels data in a table
            echo "<table>";
            echo "<tr><th></th><th>Name</th><th>Email</th><th>Phone</th><th>Check-in Date</th><th>Check-out Date</th><th>Number of Rooms</th><th>Room Type</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><input type='checkbox' name='selectedRows[]' value='" . $row['id'] . "'></td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['checkInDate'] . "</td>";
                echo "<td>" . $row['checkOutDate'] . "</td>";
                echo "<td>" . $row['numberOfRooms'] . "</td>";
                echo "<td>" . $row['roomType'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "<input type='submit' name='delete' value='Delete'>";
        } else {
            echo "No bookings found.";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </form>

    <?php
    // Check if the form is submitted for deletion
    if (isset($_POST['delete'])) {
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'travel');

        // Check the database connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the selected rows to delete
        if (isset($_POST['selectedRows'])) {
            $selectedRows = $_POST['selectedRows'];

            // Delete the selected rows
            foreach ($selectedRows as $rowId) {
                $sqlDeleteRow = "DELETE FROM hotelbooking WHERE id = $rowId";
                mysqli_query($conn, $sqlDeleteRow);
            }

            // Display success message
            echo "Selected rows deleted successfully.";
        } else {
            // No rows selected
            echo "Please select at least one row to delete.";
        }

        // Close the database connection
        mysqli_close($conn);
    }
    ?>
</body>
</html>
