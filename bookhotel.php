<!DOCTYPE html>
<html>
<head>
    <title>Zu Hotel Booking</title>
    <link href="bookhotel.css" rel="stylesheet">
    <header>
    <nav style="margin-top: 0cm ;" class="navigation" id="navbar">
      <div class="nav-bar inner flex">
        <h2>
        <span class="Blue" style="font-family: fantasy; font-size: xx-large-larger;">Zu </span>Travels
        </h2>
        <ul class="menu flex" id="menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="tour.php">Tour</a></li>
          <li><a href="hotel.php">Hotel</a></li>
          <li><a href=""class="blue">Book Now</a></li>
          <li><a href="contact.php">Contact</a></li>
          
        </ul>
        <span class="toggle-btn" onclick= style white">&#9776;</span>
      </div>
    </nav>
    </header>
</head>
<body>
    <h1 style="padding-top: 2cm;">Hotel Booking</h1>

   
    <div style="margin-top: 1cm ;">
    <form action="bookhotel.php" method="POST" >
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="checkInDate">Check-in Date:</label>
        <input type="date" id="checkInDate" name="checkInDate" required><br><br>

        <label for="checkOutDate">Check-out Date:</label>
        <input type="date" id="checkOutDate" name="checkOutDate" required><br><br>

        <label for="numberOfRooms">Number of Rooms:</label>
        <input type="number" id="numberOfRooms" name="numberOfRooms" required><br><br>

        <label for="roomType">Room Type:</label>
        <input type="text" id="roomType" name="roomType" required><br><br>

        <input type="submit" value="Book Now">
    </form>
    </div>
    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $checkInDate = $_POST['checkInDate'];
        $checkOutDate = $_POST['checkOutDate'];
        $numberOfRooms = $_POST['numberOfRooms'];
        $roomType = $_POST['roomType'];

        // Validate form fields (you can add more validation if needed)
        if (empty($name) || empty($email) || empty($phone) || empty($checkInDate) || empty($checkOutDate) || empty($numberOfRooms) || empty($roomType)) {
            echo "Please fill in all fields.";
        } else {
            // Connect to the database
            $conn = mysqli_connect('localhost', 'root', '', 'travel');

            // Check the database connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Create the hotelbooking table if it doesn't exist
            $sqlCreateTable = "CREATE TABLE IF NOT EXISTS hotelbooking (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                phone VARCHAR(20) NOT NULL,
                checkInDate DATE NOT NULL,
                checkOutDate DATE NOT NULL,
                numberOfRooms INT(11) NOT NULL,
                roomType VARCHAR(100) NOT NULL
            )";
            mysqli_query($conn, $sqlCreateTable);

            // Insert the booking information into the hotelbooking table
            $sqlInsertBooking = "INSERT INTO hotelbooking (name, email, phone, checkInDate, checkOutDate, numberOfRooms, roomType)
                VALUES ('$name', '$email', '$phone', '$checkInDate', '$checkOutDate', '$numberOfRooms', '$roomType')";
            if (mysqli_query($conn, $sqlInsertBooking)) {
                echo "Booking saved successfully!";
            } else {
                echo "Error: " . $sqlInsertBooking . "<br>" . mysqli_error($conn);
            }

            // Close the database connection
            mysqli_close($conn);
        }
    }
    ?>
</body>
</html>
