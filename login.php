<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate and sanitize form inputs
  $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
  $password = isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "";

  $servername = "localhost";
  $username = "root";
  $dbpassword = "";
  $dbname = "data4life";
  $conn = new mysqli($servername, $username, $dbpassword, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if the email exists in the database
  $stmt = $conn->prepare("SELECT password FROM donor WHERE email = ?");
  if (!$stmt) {
    die("Error: " . $conn->error);
  }
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();

    // Verify the password
    if ($password==$hashedPassword) {
      // Password is correct, set session or do any other action
      $_SESSION["loggedin"] = true;
      $_SESSION["email"] = $email;
      // Check if "Remember Me" is checked
      if (isset($_POST["remember_me"]) && $_POST["remember_me"] === "1") {
        $cookie_name = "remember_me_cookie";
        $cookie_value = $email;
        $cookie_expiry = time() + (86400 * 30); // 30 days (86400 seconds per day)
        setcookie($cookie_name, $cookie_value, $cookie_expiry, "/");
      }
      // Redirect the user to the dashboard or any other page
      header("Location: dashboardd.php");
      exit();
    } else {
      echo '<script>alert("Incorrect email or password. Please try again.");</script>';
    }
  } else {
    echo '<script>alert("Incorrect email or password. Please try again.");</script>';
  }
  $stmt->close();
  $conn->close();
}
?>

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

    /* Form Styles */
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-title {
      color: var(--blood-red);
      font-family: var(--ff-apple);
      font-size: 3.4rem;
      font-weight: var(--fw-800);
      text-align: center;
      margin-bottom: 20px;
    }

    .form-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .form-field {
      flex: 0 0 48%;
      margin-bottom: 20px;
    }

    .form-field label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: var(--blood-red);
    }

    .form-field input,
    .form-field select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-field input[type="submit"] {
      background-color: #216aca;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .form-field input[type="submit"]:hover {
      background-color: #060952;
    }

    .form-title-login {
      text-align: center;
      margin-top: 30px;
      font-family: var(--ff-apple);
      font-size: 1.8rem;
      color: #216aca;
    }

    .form-title-login a {
      color: #216aca;
      text-decoration: underline;
    }

    .form-title-login a:hover {
      color: #03d9ff;
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
        <a href="adminlogin.php" class="btn">Admin Login</a>
        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>
      </div>
    </div>
  </header>

  <main>
    <article>
      <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png'); margin: 0%;" aria-label="hero">
        <!-- Login and Registration Form -->
        <div class="container">
          <div class="form-container">
            <div class="form-title">Donor Login</div>
            <hr><br><br>
            <form action="" method="POST">
              <div class="form-section">
                <div class="form-field">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required>
                </div>
                <div class="form-field">
                  <label for="password">Password:</label>
                  <input type="text" id="password" name="password" required>
                </div>
                <div class="form-field">
                  <label for="remember_me">Remember Me:</label>
                  <input type="checkbox" id="remember_me" name="remember_me" value="1">
                </div>
              </div><br>
              <button type="submit" class="btn">Login</button>
            </form><br><br>
            <div class="form-title">Not Registered? <u><a href="register.php" style="display: inline; color: #D1006C;" onmouseover="this.style.color='#D1006C'" onmouseout="this.style.color='#940A0A'">Register Here</a></u></div>
          </div>
          <figure class="hero-banner">
            <img src="./assets/images/loginimage.png" width="587" height="839" alt="hero banner" class="w-100">
            <center>
              <h1>Welcome back</h1>
              <center>
          </figure>

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
          <a href="mailto:redstream001@gmail.com" class="contact-link">redstream001@gmail.com</a>
        </li>
        <li class="contact-item">
          <ion-icon name="call-outline"></ion-icon>
          <a href="tel:+917558951351" class="contact-link">+91-7558-951-351</a>
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
              </span> <span class="span">Login / Register</span>
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

</body>

</html>