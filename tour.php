<!DOCTYPE html>
<html>
<head>
    <title>Zu Tours</title>
    <link href="tour.css" rel="stylesheet">
    <header>
    <nav class="navigation" id="navbar">
      <div class="nav-bar inner flex">
        <h2>
        <span class="Blue" style="font-family: fantasy; font-size: xx-large-larger;">Zu </span>Travels
        </h2>
        <ul class="menu flex" id="menu">
          <li><a href="home.php">Home</a></li>
          <li><a href=""  class="blue">Tour</a></li>
          <li><a href="hotel.php">Hotel</a></li>
          <li><a href="booking.php">Book Now</a></li>
          <li><a href="contact.php">Contact</a></li>
          
          
        </ul>
        <span class="toggle-btn" onclick= style white">&#9776;</span>
      </div>
    </nav>
    </header>
    <script>
        // JavaScript code to change the images every 15 seconds
        var images = [
            "image1.jpg",
            "image2.jpg",
            "image3.jpg",
            // Add more image URLs here
        ];

        var currentIndex = 0;

        function changeImage() {
            var img = document.getElementById("adImage");
            img.src = images[currentIndex];
            currentIndex = (currentIndex + 1) % images.length;
        }

        setInterval(changeImage, 15000); // Change image every 15 seconds
    </script>
</head>
<body>
   
    
<div class="four-section inner">
    <h3>Blog</h3>
    <h1>Our Latest Blog</h1>
    <div class="boxes-flex">
      <div class="box">
        <div class="img-box">
          <img src="blog1.jpg" alt="">
        </div>
        <div class="text">
          <h4>Travel</h4>
          <h2>Beautiful Places in new york</h2>
          <a href="booktour.php"><input type="button" value='Book Now'></a> 
          <div class="inner-box-flex">
            <div class="left">
              <p>
                <span class="fa fa-comments icon" aria-hidden="true"></span>
              </p>
            </div>
            <div class="right">
              <p>
                <span class="fa fa-eye" aria-hidden="true"></span>
              </p>
            </div>
          </div>
        </div>
      </div>


      <div class="box">
        <div class="img-box">
          <img src="img1.jpg" alt="">
        </div>
        <div class="text">
          <h4>Travel</h4>
          <h2>Beautiful Places in natgher lands</h2>
          <a href="booktour.php"><input type="button" value='Book Now'></a> 
          <div class="inner-box-flex">
            <div class="left">
              <p>
                <span class="fa fa-comments icon" aria-hidden="true"></span>
              </p>
            </div>
            <div class="right">
              <p>
                <span class="fa fa-eye" aria-hidden="true"></span>
              </p>
            </div>
          </div>
        </div>
      </div>


      <div class="box">
        <div class="img-box">
          <img src="img2.jpg" alt="">
        </div>
        <div class="text">
          <h4>Travel</h4>
          <h2>Beautiful Places in Thailand</h2>
          <a href="booktour.php"><input type="button" value='Book Now'></a> 
          <div class="inner-box-flex">
            <div class="left">
              <p>
                <span class="fa fa-comments icon" aria-hidden="true"></span>
              </p>
            </div>
            <div class="right">
              <p>
                <span class="fa fa-eye" aria-hidden="true"></span>
              </p>
            </div>
          </div>
        </div>
      </div>




      <div class="box">
        <div class="img-box">
          <img src="img3.jpg" alt="">
        </div>
        <div class="text">
          <h4>Travel</h4>
          <h2>Beautiful Places in Austria</h2>
          <a href="booktour.php"><input type="button" value='Book Now'></a> 
          <div class="inner-box-flex">
            <div class="left">
              <p>
                <span class="fa fa-comments icon" aria-hidden="true"></span>
              </p>
            </div>
            <div class="right">
              <p>
                <span class="fa fa-eye" aria-hidden="true"></span>
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
