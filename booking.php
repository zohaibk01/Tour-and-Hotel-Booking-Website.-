<!DOCTYPE html>
<html>
<head>
    <title>Zu Booking</title>
    <link rel="stylesheet" href="booking.css">
    <style>
        body {
            background-image: url("hotel1.3.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .content {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            margin: 0 auto;
            max-width: 800px;
            text-align: center;
            color: #fff;
            font-size: 20px;
        }

        .button {
            margin-top: 20px;
            display: inline-block;
            padding: 40px 80px;
            background-color: #3ec70b;
            color: #fff;
            font-size: 36px;
            border-radius: 4px;
            cursor: pointer;
            transition: transform 0.3s;
            text-decoration: none;
        }

        .button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
<nav class="navigation" id="navbar">
      <div class="nav-bar inner flex">
        <h2><span class="Blue" style="font-family: fantasy; font-size: xx-large-larger;">Zu </span>Travels</h2>
         <h1 style="text-align: center; font-size: xx-large" >Book Now</h1> 
      </div>
</nav>
<div class="content">
    <p>
        "Welcome to Zu Travels, where unforgettable experiences await you.
        With our passion for travel and dedication to exceptional service,
        we strive to create dream vacations and seamless stays.
        Discover breathtaking destinations, immerse yourself in vibrant cultures,
        and indulge in luxurious accommodations. Whether you're seeking
        an adventurous tour or a tranquil retreat, our knowledgeable team
        is here to curate a personalized experience tailored to your desires.
        Embark on a journey of discovery and relaxation with us,
        and let us create memories that will last a lifetime."
    </p>
    <div class="button-container">
        <a href="booktour.php" class="button">Book Tour</a>
        <a href="bookhotel.php" class="button">Book Hotel</a>
    </div>
</div>

</body>
</html>
