<!DOCTYPE html>
<html>
<head>
    <title>Booked Contacts</title>
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
    <h1>Booked Contacts</h1>

    <form action="" method="post">
        <?php
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'travel');

        // Check the database connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve the booked contacts data from the database
        $sqlRetrieveContacts = "SELECT * FROM contacts";
        $result = mysqli_query($conn, $sqlRetrieveContacts);

        if (mysqli_num_rows($result) > 0) {
            // Display the booked contacts data in a table
            echo "<table>";
            echo "<tr><th></th><th>Name</th><th>Email</th><th>Message</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><input type='checkbox' name='selectedContacts[]' value='" . $row['name'] . "'></td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "<input type='submit' name='deleteButton' value='Delete' class='delete-button'>";
        } else {
            echo "No contacts found.";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </form>

    <?php
    // Check if the Delete button is clicked
    if (isset($_POST['deleteButton'])) {
        // Get the selected contacts to delete
        $selectedContacts = $_POST['selectedContacts'];

        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'travel');

        // Check the database connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Delete the selected contacts from the database
        foreach ($selectedContacts as $contact) {
            $sqlDeleteContact = "DELETE FROM contacts WHERE name = '$contact'";
            mysqli_query($conn, $sqlDeleteContact);
        }

        // Close the database connection
        mysqli_close($conn);

        // Refresh the page to reflect the changes
        echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>
</body>
</html>
