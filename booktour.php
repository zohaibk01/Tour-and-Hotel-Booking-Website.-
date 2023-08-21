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

// Initialize variables
$name = "";
$email = "";
$phone = "";
$destination = "";
$travelDate = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $destination = $_POST["destination"];
    $travelDate = $_POST["travel_date"];

    // Insert data into the database
    $query = "INSERT INTO tourbookings (name, email, phone, destination, travel_date) VALUES ('$name', '$email', '$phone', '$destination', '$travelDate')";
    if ($mysqli->query($query)) {
        echo "";
        // Reset form fields after successful submission
        $name = "";
        $email = "";
        $phone = "";
        $destination = "";
        $travelDate = "";
    } else {
        echo "Error: " . $mysqli->error;
    }
}

// Close the database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Zu Book Tour</title>
    <link href="booktour.css" rel="stylesheet">
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
    <h1 style="padding-top: 2cm;" >Book Tour</h1>

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" required>

        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" value="<?php echo $destination; ?>" required>

        <label for="travel_date">Travel Date:</label>
        <input type="date" id="travel_date" name="travel_date" value="<?php echo $travelDate; ?>" required>

        <input type="submit" value="Book Now">
    </form>
</body>
</html>