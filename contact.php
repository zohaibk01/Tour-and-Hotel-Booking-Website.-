<!DOCTYPE html>
<html>
<head>
    <title>Zu Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <header>
    <nav class="navigation" id="navbar">
      <div class="nav-bar inner flex">
        <h2>
        <span class="Blue" style="font-family: fantasy; font-size: xx-large-larger;">Zu </span>Travels
        </h2>
        <ul class="menu flex" id="menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="tour.php">Tour</a></li>
          <li><a href="hotel.php">Hotel</a></li>
          <li><a href="booking.php">Book Now</a></li>
          <li><a href="" class="blue">Contact</a></li>
          
        </ul>
        <span class="toggle-btn" onclick= style white">&#9776;</span>
      </div>
    </nav>
    </header>
</head>
<body>
    <h1>Contact Us</h1>
    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Validate form fields (you can add more validation if needed)
        if (empty($name) || empty($email) || empty($message)) {
            echo "Please fill in all fields.";
        } else {
            // Connect to the database
            $conn = mysqli_connect('localhost', 'root', '', 'travel');

            // Check the database connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Insert the message into the database
            $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
            if (mysqli_query($conn, $sql)) {
                echo "";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            // Close the database connection
            mysqli_close($conn);
        }
    }
    ?>
    <div style="margin-top: 50px;">
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>

        <input type="submit" value="Submit"> <button onclick="location.href='home.php'">Back</button> 
    </form>
    </div>
</body>
       