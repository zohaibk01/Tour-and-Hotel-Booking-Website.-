<!DOCTYPE html>
<html>
<head>
    <title>Zu Hotels</title>
   <link href="hotel.css" rel="stylesheet">
     <header>
    <nav class="navigation" id="navbar">
      <div class="nav-bar inner flex">
        <h2>
        <span class="Blue" style="font-family: fantasy; font-size: xx-large-larger;">Zu </span>Travels
        </h2>
        <ul class="menu flex" id="menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="tour.php">Tour</a></li>
          <li><a href="" class="blue">Hotel</a></li>
          <li><a href="booking.php">Book Now</a></li>
          <li><a href="contact.php">Contact</a></li>
          
        </ul>
        <span class="toggle-btn" onclick= style white">&#9776;</span>
      </div>
    </nav>
    </header>
    
</head>
<body>
      <h1 style="text-align: center;">Hotels</h1>

    <div class="hotel-ad">
        <img class="hotel-image" src="hotel1.1.jpg" alt="Hotel Image">
        <div class="hotel-info">
            <h2>The Heaven</h2>
            <p>Experience luxury and comfort at The Heaven.
               Immerse yourself in elegant surroundings,
               indulge in exquisite dining options,
               and relax in spacious rooms with stunning views.
                Your perfect getaway awaits.</p>
            <button onclick="location.href='bookhotel.php'">Book Now</button>
        </div>
    </div>

    <div class="hotel-ad">
        <img class="hotel-image" src="hotel2.1.jpg" alt="Hotel Image">
        <div class="hotel-info">
            <h2>Marina Heights</h2>
            <p>Discover a blend of modern sophistication and warm hospitality at Marina Heights.
               Enjoy contemporary rooms, world-class amenities,
                and impeccable service, all in the heart of the city.
                 Unforgettable memories await.</p>
            <button onclick="location.href='bookhotel.php'">Book Now</button>
        </div>
    </div>

    <div class="hotel-ad">
        <img class="hotel-image" src="hotel3.1.jpg" alt="Hotel Image">
        <div class="hotel-info">
            <h2>La Monata</h2>
            <p>Escape to La Monata, a tranquil oasis nestled amidst breathtaking natural beauty.
                 Embrace serenity, rejuvenate your senses,
                 and indulge in personalized service, making your stay truly unforgettable.</p>
            <button onclick="location.href='bookhotel.php'">Book Now</button>
        </div>
    </div>

    <!-- Add more hotel ads as needed -->

</body>
</html>
