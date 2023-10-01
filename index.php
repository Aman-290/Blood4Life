<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood4Life</title>

  <!-- favicon-->
  <link rel="shortcut icon" href="./logo.jpeg" type="image/svg+xml">

  <!--css-->
  <link rel="stylesheet" href="./assets/css/style.css">


  <!-- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
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
        <a href="#" class="logo"><img src="logo.jpeg" alt="Blood4Life Logo"> Blood4Life</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="index.php" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="#service" class="navbar-link" data-nav-link>Find donor</a>
            </li>
            <li>
              <a href="#about" class="navbar-link" data-nav-link>About Us</a>
            </li>
            <li>
              <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
            </li>
          </ul>
        </nav>
        <a href="adminlogin.php" class="btn">Admin Login</a>
        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>
      </div>
    </div>
  </header>
  <div class="allign1" id="buttons">
    <div class="button-containerxx">
      <div class="but11"><a href="login.php"><button class="buttonxx">&nbsp;DONOR&nbsp;</button></a></div>
      <div class="but22"><a href="loginp.php"><button class="buttonxx">PATIENT</button></a></div>
    </div>
  </div>
  <main>
    <article>


      <!--SERVICE-->
      <section class="section service" id="service" aria-label="service">
        <div class="container">
          <h3 class="section-subtitle text-center">Check Donor Availability</h3>

          <!-- Replace the existing content with your form -->
          <form class="donor-form" method="POST" action="finddonor.php">

            <div class="form-group">
              <label for="blood-type">Blood Type:</label>
              <select id="blood-type" name="blood-type">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
            </div>

            <button type="submit" class="btn" name="find">Find Donor</button>
          </form>
        </div>
      </section>



      <!--ABOUT-->
      <section class="section about" id="about" aria-label="about">
        <div class="container">
          <figure class="about-banner">
            <img src="aboutus.png" width="470" height="538" loading="lazy" alt="about banner" class="w-100">
          </figure>
          <div class="about-content">
            <p class="section-subtitle">About Us</p>
            <h2 class="h2 section-title">Sharing the gift of Lifeꨄ👨🏻‍👩🏽‍👧🏽‍👦🏻</h2>
            <p class="section-text section-text-1">
              At Blood4Life, we are passionate about connecting blood donors with recipients and bridging the gap in the
              healthcare industry.
              Our mission is to provide a seamless and efficient experience for both donors and recipients, ensuring
              timely access to life-saving blood transfusions.
            </p>
            <p class="section-text">
              We strive to create a community that fosters empathy, support, and solidarity among individuals who are
              committed to making a difference.
              Whether you're a potential donor or someone in need of blood, we are here to assist you every step of the
              way.
            </p>
            <a href="about.php" class="btn">Read more About Us</a>
          </div>
        </div>
      </section>



      <!--services-->

      <section class="section doctor" aria-label="doctor">
        <div class="container">
          <p class="section-subtitle text-center">Emergency !</p>
          <h2 class="h2 section-title text-center">Our other services</h2>
          <ul class="has-scrollbar">
            <li class="scrollbar-item">
              <div class="doctor-card">
                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-1.png" width="460" height="500" loading="lazy" alt="PREBOOK" class="img-cover">
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title">Pre Book Blood</a>
                </h3>
                <p class="card-subtitle">Book Blood For An upcoming Date</p>
                <ul class="card-social-list">
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="scrollbar-item">
              <div class="doctor-card">
                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-2.png" width="460" height="500" loading="lazy" alt="AMBULANCE" class="img-cover">
                </div>
                <h3 class="h3">
                  <a href="contact.php" class="card-title">Call Ambulance</a>
                </h3>
                <p class="card-subtitle">Get our ambulance service</p>
                <ul class="card-social-list">
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="scrollbar-item">
              <div class="doctor-card">

                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-3.png" width="460" height="500" loading="lazy" alt="WHY DONATE ?" class="img-cover">
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title">Have Doubts? </a>
                </h3>
                <p class="card-subtitle">Ask our AI chatbot↘️</p>
                <ul class="card-social-list">
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="scrollbar-item">
              <div class="doctor-card">
                <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                  <img src="./assets/images/doctor-4.png" width="460" height="500" loading="lazy" alt="CAN YOU DONATE" class="img-cover">
                </div>
                <h3 class="h3">
                  <a href="canyoudonate.php" class="card-title">Can You Donate ?</a>
                </h3>
                <p class="card-subtitle">Check that can you donate blood</p>
                <ul class="card-social-list">
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="card-social-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </section>


    </article>
  </main>

  <!--Header as footer-->
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
            We are passionate about connecting blood donors with recipients and bridging the gap in the healthcare
            industry.
            We strive to create a community that fosters empathy, support, and solidarity among individuals who are
            committed to making a difference.
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
            <a href="#service" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Find donor</span>
            </a>
          </li>
          <li>
            <a href="#about" class="footer-link">
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
            <a href="#buttons" class="footer-link">
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
            <a href="https://www.google.com/maps/dir/12.9812613,79.16614/CMC+Vellore+Blood+Bank/@12.9592703,79.1116472,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3bad3894c53f4cf7:0xc6a375524a799d8d!2m2!1d79.1351887!2d12.9245828?entry=ttu" target="_blank">
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

  
  <!--BACK TO TOP-->
  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up" aria-hidden="true"></ion-icon>
  </a>

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