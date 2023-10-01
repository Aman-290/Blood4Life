<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood4Life</title>

  <!-- favicon-->
  <link rel="shortcut icon" href="./assets/images/logo.jpeg" type="image/svg+xml">

  <!--css-->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    /* Popup styles */
    .popup {
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background: linear-gradient(135deg, #ffffff, #a3d2ee);
      color: #0e254e;
      font-size: 16px;
      z-index: 9999;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    @media screen and (max-width: 768px) {
      .hero-form {
        display: flex;
        flex-direction: column;
      }

      .email-field {
        margin-bottom: 10px;
      }

      .hero-banner iframe {
        width: 100%;
        height: 200px;
      }
    }

    @media screen and (max-width: 900px) {
      .hero-form {
        display: flex;
        flex-direction: column;
      }

      .email-field {
        margin-bottom: 10px;
      }

      .hero-banner iframe {
        width: 100%;
        height: 250px;
      }
    }

    /* Media query for screen sizes between 905x800 and 1197x800 */
    @media screen and (min-width: 905px) and (max-width: 1197px) {
      .hero-form {
        max-width: 70%;
        margin: 0 auto;
      }

      .hero-banner iframe {
        width: 100%;
        height: 300px;
      }
    }
  </style>

  <script>
    // Function to display the popup message
    function showPopup(message) {
      const popup = document.createElement("div");
      popup.className = "popup";
      popup.textContent = message;
      document.body.appendChild(popup);
      // Automatically close the popup after 3 seconds
      setTimeout(function() {
        popup.remove();
      }, 3000);
    }
  </script>

</head>

<body id="top">
  <!-- HEADER-->
  <header class="header">

    <div class="header-bottom" data-header>
      <div class="container">
        <a href="#" class="logo"><img src="logo.jpeg" alt="Blood4Life Logo">Blood4Life</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="index.php" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="index.php" class="navbar-link" data-nav-link>Find donor</a>
            </li>
            <li>
              <a href="about.php" class="navbar-link" data-nav-link>About Us</a>
            </li>
            <li>
              <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
            </li>
          </ul>
        </nav>
        <a href="adminlogin.php" class="btn">Admin login</a>
        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>
      </div>
    </div>
  </header>

  <main>
    <article>
      <!--HERO-->
      <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')" aria-label="hero">
        <div class="container">
          <div class="hero-content">
            <img src="assets/images/blood-icon.png" alt="ICON" width="70" height="70">
            <p class="section-subtitle">Blood4Life</p>
            <h1 class="h1 hero-title">Contact Us</h1>
            <h2 style="color: var(--royal-blue-light);">Address</h2>
            <p class="hero-text">
              Blood4Life, Katpadi, VIT, Tamil Nadu IN<br>
              Pin 632014
            </p>
            <h2 style="color: var(--royal-blue-light);">Contact Details</h2>
            <p class="hero-text">
              MOBILE:+91-8984-951-341| TELEPHONE: 0484-292674<br>
              EMAIL : blood4life@gmail.com<br>
            </p>
            <h2>Have any doubts? Ask out chatbot <br>powered by AI in the right corner of your screen ↘️</h2>
          </div>
          <figure class="hero-banner">
          <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"query":"VIT, Vellore, Tamil Nadu, India","width":700,"height":600,"satellite":false,"zoom":12,"placeId":"ChIJSw1bb6NHrTsRnk_izYytPJg","cid":"0x983cad8ccde24f9e","coords":[12.9747624,79.1643165],"lang":"en","queryString":"VIT, Vellore, Tamil Nadu, India","centerCoord":[12.9747624,79.1643165],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1003510"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=1003510';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/map-embed">1 Map</a></div>
          </figure>
        </div>
      </section>
      <div class="header-top">
        <div class="container">
          <ul class="contact-list">
            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>
              <a href="mailto:blood4life@gmail.com" class="contact-link">blood4life@gmail.com</a>
            </li>
            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>
              <a href="tel:+918984951341" class="contact-link">+91-8984-951-341</a>
            </li>
          </ul>
          <ul class="social-list">
            <li>
              <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/Annabel07785340" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li>
              <a href="https://youtu.be/Af0gk_kiGac" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!--FOOTER-->
      <footer class="footer">
        <div class="footer-top section">
          <div class="container">
            <div class="footer-brand">
              <a href="#" class="logo"><img src="blood-icon.png" alt="Blood4Life Logo">Blood4Life</a>
              <p class="footer-text">
                We are passionate about connecting blood donors with recipients and bridging the gap in the healthcare industry.
                We strive to create a community that fosters empathy, support, and solidarity among individuals who are committed to making a difference.
              </p>
              <div class="schedule">
                <div class="schedule-icon">
                  <ion-icon name="time-outline"></ion-icon>
                </div>
                <span class="span">
                  24 X 7:<br>
                  365 Days
                </span>
              </div>
            </div>
            <ul class="footer-list">
              <li>
                <p class="footer-list-title">Other Links</p>
              </li>
              <li>
                <a href="index.php" class="footer-link">
                  <ion-icon name="add-outline"></ion-icon>
                  <span class="span">Home</span>
                </a>
              </li>
              <li>
                <a href="index.php" class="footer-link">
                  <ion-icon name="add-outline"></ion-icon>
                  <span class="span">Find donor</span>
                </a>
              </li>
              <li>
                <a href="about.php" class="footer-link">
                  <ion-icon name="add-outline"></ion-icon>
                  <span class="span">About us</span>
                </a>
              </li>
              <li>
                <a href="contact.php" class="footer-link">
                  <ion-icon name="add-outline"></ion-icon>
                  <span class="span">Contact</span>
                </a>
              </li>
              <li>
                <a href="index.php" class="footer-link">
                  <ion-icon name="add-outline"></ion-icon>
                  <span class="span">Login / Register</span>
                </a>
              </li>
            </ul>
            <ul class="footer-list">
              <li>
                <p class="footer-list-title">Contact Us</p>
              </li>
              <li class="footer-item">
                <div class="item-icon">
                  <ion-icon name="location-outline"></ion-icon>
                </div>
                <a href="https://goo.gl/maps/BYA5MxQUg5B8ZFLcA">
                  <address class="item-text">
                    Katpadi, VIT, <br>
                    Tamil Nadu IN
                  </address>
                </a>
              </li>
              <li class="footer-item">
                <div class="item-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
                <a href="tel:+918984951341" class="contact-link">+91-8984-951-341</a>
              </li>
              <li class="footer-item">
                <div class="item-icon">
                  <ion-icon name="mail-outline"></ion-icon>
                </div>
                <a href="mailto:blood4life@gmail.com" class="contact-link">blood4life@gmail.com</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <p class="copyright">
              &copy; 2024 All Rights Reserved by Blood4Life
            </p>
            <ul class="social-list">
              <li>
                <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/Annabel07785340" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </footer>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["email_address"]) && filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)) {
          // Sanitize the email address to prevent SQL injection
          $email = htmlspecialchars($_POST["email_address"]);
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "redstream_db";
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $stmt = $conn->prepare("INSERT INTO response_back (email) VALUES (?)");
          $stmt->bind_param("s", $email);
          $stmt->execute();
          if ($stmt->affected_rows > 0) {
            echo '<script>showPopup("Email added successfully!");</script>';
          } else {
            echo '<script>showPopup("Error: Unable to add email. Please try again later.");</script>';
          }
          $stmt->close();
          $conn->close();
        } else {
          echo '<script>showPopup("Error: Invalid email address. Please enter a valid email.");</script>';
        }
      }
      ?>



      <!--custom js link-->
      <script src="./assets/js/script.js" defer></script>
      <!--ionicon link-->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


      <!--chatbot-->

      <!-- Start of ChatBot (www.chatbot.com) code -->
      <script type="text/javascript">
        window.__be = window.__be || {};
        window.__be.id = "651862d60ca167000797d6ef";
        (function() {
          var be = document.createElement('script');
          be.type = 'text/javascript';
          be.async = true;
          be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(be, s);
        })();
      </script>
      <noscript>You need to <a href="https://www.chatbot.com/help/chat-widget/enable-javascript-in-your-browser/" rel="noopener nofollow">enable JavaScript</a> in order to use the AI chatbot tool powered by <a href="https://www.chatbot.com/" rel="noopener nofollow" target="_blank">ChatBot</a></noscript>
      <!-- End of ChatBot code -->
</body>

</html>