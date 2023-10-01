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
    hr {
      border: none;
      height: 1px;
      background-color: #c5c7c9;
      margin: 20px 0;
    }

    /* Define the column layout */
    .column {
      width: 33.33%;
      float: left;
      padding: 20px;
      box-sizing: border-box;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout */
    @media screen and (max-width: 1024px) {
      .column {
        width: 100%;
      }
    }

    /* Adjust font size for smaller screens */
    @media screen and (max-width: 768px) {
      h1 {
        font-size: 22px;
      }

      p {
        font-size: 14px;
      }
    }
  </style>

</head>

<body>
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
  <!--HERO-->
  <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')" aria-label="hero">
    <div class="container">
      <div class="hero-content">
        <img src="assets/images/blood-icon.png" alt="ICON" width="70" height="70">
        <p class="section-subtitle"> Blood4Life</p>
        <h1 class="h1 hero-title">Connecting The Donors...</h1>
        <p class="hero-text">
          Welcome to Blood4Life, a dedicated community-driven platform that aims to connect blood donors and recipients
          seamlessly.
          Our mission is to bridge the gap in the healthcare industry by making blood donation more accessible and
          efficient by avoiding the intermediaries,
          ultimately saving lives and fostering solidarity within the community.
        </p><br><br><br>
      </div>
      <figure class="hero-banner">
        <img src="./assets/images/about.png" width="587" height="839" alt="hero banner" class="w-100">
      </figure>
    </div>
  </section>
  <!--HERO SECOND-->
  <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')" aria-label="hero">
    <div class="container">
      <div class="hero-content">

        <p class="hero-text">
          <img src="./assets/images/about3.png" width="587" height="839" alt="hero banner" class="w-100">
        </p>
      </div>
      <figure class="hero-banner">
        <h1 class="h1 hero-title">Who We Are</h1>
        <p style="font-size: larger;">Blood4Life is started by the brainchild of a passionate group of BCA students of VIT Vellore.
          United by a common purpose, we came together to address the pressing need for a streamlined process of blood
          donation so that we can use our knowledge in the field of technology
          and give a small contibution to the society from our side.</p>
      </figure>
    </div>
  </section>
  <!--Hero THIRD-->
  <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')" aria-label="hero">
    <div class="container">
      <div class="hero-content">
        <img src="assets/images/blood-icon.png" alt="ICON" width="70" height="70">
        <p class="section-subtitle">Blood4Life</p>
        <h1 class="h1 hero-title">Our Vision</h1>
        <p class="hero-text">
          At Blood4Life, our vision is to create a centralized hub that connects blood donors and recipients in need. We
          envision a future where finding a suitable blood donor
          is no longer a time-consuming and challenging task. Instead, it becomes a simple, efficient, and accessible
          process that can save lives during critical moments. Also we tried
          our best in creating a user-friendly interface for this site so normal users can navigate and use our services
          easly.
        </p>
      </div>
      <figure class="hero-banner">
        <img src="./assets/images/about5.png" width="587" height="839" alt="hero banner" class="w-100">
      </figure>
    </div>
  </section>
  <!--Hero THIRD-->
  <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')" aria-label="hero">
    <div class="container">
      <div class="hero-content">

        <p class="hero-text">
          <img src="./assets/images/about4.png" width="587" height="839" alt="hero banner" class="w-100">
        </p>
      </div>
      <figure class="hero-banner">
        <h1 class="h1 hero-title">How We Work</h1>
        <p style="font-size: larger;">The process is straightforward: donors register their details with us, providing
          essential information about their blood type,
          contact details, and location. By creating a comprehensive database of donors, we can quickly match them with
          recipients searching for compatible donors.<br><br>
          For recipients seeking blood, our user-friendly platform allows them to enter their requirements and search
          for potential matches within the donor database.
          The matching process is efficient and designed to connect recipients with suitable donors promptly.<br>
          Also we provide a simple response back utility which users can enter their email address and we will directly
          respond from our side. Also users can pre-book blood for
          an upcoming date and we will arrange blood directly and reach you. We also have an emergency ambulance service
          you can call any time.</p>
      </figure>
    </div>
  </section>
  <!--Hero FOURTH-->
  <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')" aria-label="hero">
    <div class="container">
      <div class="hero-content">
        <img src="assets/images/blood-icon.png" alt="ICON" width="70" height="70">
        <p class="section-subtitle">Blood4Life</p>
        <h1 class="h1 hero-title">24x7 Support and Service</h1>
        <p class="hero-text">
          We take pride in offering round-the-clock service and support and service including the ambulance services.
          Our team is dedicated to providing prompt assistance and addressing any concerns or queries you may have.
          Your well-being and satisfaction are our top priorities.
        </p>
      </div>
      <figure class="hero-banner">
        <img src="./assets/images/about2.png" width="587" height="839" alt="hero banner" class="w-100">
      </figure>
    </div>
    <hr style="margin-left: 3cm; margin-right: 3cm;">

    <div class="row" style="overflow: hidden; padding: 1cm;">
      <!-- First Column -->
      <div class="column">
        <h1 style="color: var(--oxford-blue-1); font-size: var(--fs-1);">Join the Blood4Life Community</h1>
        <br>
        <p style="font-size: 17px;">
          We invite you to join our growing community of blood donors and recipients. By becoming a part of Blood4Life,
          you contribute to a noble cause and play a vital role in saving lives. Your selfless act of blood donation can
          make a significant impact and bring hope to those in need.
        </p>
      </div>

      <!-- Second Column -->
      <div class="column">
        <h1 style="color: var(--oxford-blue-1); font-size: var(--fs-1);">Let's Create a Better Tomorrow</h1>
        <br>
        <p style="font-size: 17px;">
          At Blood4Life, we firmly believe that when individuals come together with a common purpose, remarkable things
          can happen. With your support and participation,
          we can build a future where blood donation is readily available to those who need it the most. Together, we
          can create a better tomorrow and foster a community of caring and compassion.
        </p>
      </div>

      <!-- Third Column -->
      <div class="column">
        <h1 style="color: var(--oxford-blue-1); font-size: var(--fs-1);">Raise a fund if you can</h1>
        <br>
        <p style="font-size: 17px;">
          Ours is a service group of dedicated persons without any intention of making profits. But inorder to run and
          maintain our services we have expenses, currently we are running
          our services with the contribution of our own team and some kind personalities and sponsors. You can donate us
          a fund and join us to run our services seamlessly.
          You can call or message at <a href="tel:+918984951341" class="footer-link" style="display: inline; color: #216aca;" onmouseover="this.style.color='#03d9ff'" onmouseout="this.style.color='#216aca'">91-8984-951-341 to donate fund</a>.
        </p>
      </div>
    </div>

  </section>


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
  <!--Footer-->
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
            <a href="tel:+918984951341" class="footer-link">+91-8984-951-341</a>
          </li>
          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="mailto:blood4life@gmail.com" class="footer-link">blood4life@gmail.com</a>
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

</body>

</html>