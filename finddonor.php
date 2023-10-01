<!DOCTYPE html>
<html>
    <head>
                <!-- favicon-->
  <link rel="shortcut icon" href="./logo.jpeg" type="image/svg+xml">

<!--css-->
<link rel="stylesheet" href="./assets/css/style.css">
    <style>
      :root{
        --blood-red: hsl(0, 87%, 31%);
        --pink: hsl(329, 85%, 41%);
      }
  h2{
    text-align: center;
    margin-top: 10%;
    padding: 2%;
}
.logbutt{

  background-image: linear-gradient(
    var(--blood-red, 90deg),
    var(--blood-red) 0%,
    var(--pink) 100%
  );
  color: var(--white);
  font-size: var(--fs-7);
  text-transform: capitalize;
  padding: 15px 30px;
  text-align: center;
  border-radius: 10px;
  box-shadow: var(--shadow-4);
  transition: transform 0.3s ease, background-image 0.3s ease;
}

.logbutt:is(:hover, :focus) {
  --deg: -90deg;
  transform: scale(1.05);
}


</style>




    </head>
    <body>
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
<?php
if(isset($_POST['find']))
{
    $bloodgroup=htmlspecialchars($_POST['blood-type']);
    $servername = "localhost";
  $username = "root";
  $dbpassword = "";
  $dbname = "data4life";
  $conn = new mysqli($servername, $username, $dbpassword, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM donor WHERE bloodgroup = ?");
if (!$stmt) {
    die("Error: " . $conn->error);
}

$stmt->bind_param("s", $bloodgroup);
if ($stmt->execute()) {
    $result = $stmt->get_result();
    
    // Fetch the count value
    $row = $result->fetch_assoc();
    $count = $row["count"];
    
    echo "<h2>Number of records with blood group '$bloodgroup': $count<h2>";
    //echo '<a href="login.php">Login to see donor details</a>';
    echo '<center><button onclick="window.location.href=\'loginp.php\'" class="logbutt">Login to see details</button></center>';
} else {
    echo "Error: Unable to execute the SELECT query.";
}

$stmt->close();
}
?>
</body>
</html>