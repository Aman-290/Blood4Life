<!DOCTYPE html>
<html>
    <head>
       <!-- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

<!--css-->
<link rel="stylesheet" href="./assets/css/style.css">
        <style>
            /* Add some basic styles */
            *{
                font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            }

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

/* Style the table header */
th {
    background-color: #f7c6c6;
}

/* Add hover effect on table rows */
tr:hover {
    background-color: #f5f5f5;
}

h1{
    text-align: center;
    color: rgb(148,10,10);
    margin-top: 8%;
    padding: 2%;

}

/* Make the table responsive on smaller screens */
@media (max-width: 600px) {
    table {
        border: 0;
    }
    
    table thead {
        display: none;
    }
    
    table tr {
        margin-bottom: 10px;
        display: block;
        border: 1px solid #ccc;
    }
    
    table td {
        display: block;
        text-align: left;
    }
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
          <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
        </li>
        <li>
          <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
        </li>
      </ul>
    </nav>
    <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
      <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
      <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
    </button>
  </div>
</div>
</header>
    <?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("Location: login.php");
  exit;
}

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "data4life";
$conn = new mysqli($servername, $username, $dbpassword, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION["email"];
$stmt = $conn->prepare("SELECT bloodgroup FROM donor WHERE email = ?");
if (!$stmt) {
  die("Error: " . $conn->error);
}
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($bloodgroup);
$stmt->fetch();
echo "<h1>All patients with the blood group: " . htmlspecialchars($bloodgroup) . "</h1>";
$stmt2 = $conn->prepare("SELECT name, phone, email, bloodgroup, gender, birthdate, `weight`, state, zipcode, district, area, landmark from patient WHERE bloodgroup = ?");
if (!$stmt2) {
  die("Error: " . $conn->error);
}
$stmt2->bind_param("s", $bloodgroup);
$stmt2->execute();
$stmt2->bind_result($name, $phone, $email, $bloodgroup, $gender, $birthdate, $weight, $state, $zipcode, $district, $area, $landmark);

// Fetch data and store it in an array
$data = [];
while ($stmt2->fetch()) {
    $data[] = [
        'name' => $name,
        'bloodgroup' => $bloodgroup,
        'phone' => $phone,
        'email' => $email,
        'gender' => $gender,
        'birthdate' => $birthdate,
        'weight' => $weight,
        'state' => $state,
        'zipcode' => $zipcode,
        'district' => $district,
        'area' => $area,
        'landmark' => $landmark,
    ];
}

// Sort the data by state name (case-insensitive)
usort($data, function($a, $b) {
    return strcasecmp($a['state'], $b['state']);
});

echo '<table id="patientTable">';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Blood Group</th>';
echo '<th>State</th>';
echo '</tr>';

// Display sorted rows
foreach ($data as $row) {
    echo '<tr class="details-row">';
    echo '<td>' . htmlspecialchars($row['name']) . '</td>';
    echo '<td>' . htmlspecialchars($row['bloodgroup']) . '</td>';
    echo '<td>' . htmlspecialchars($row['state']) . '</td>';
    echo '</tr>';
    echo '<tr class="hidden-row">';
    echo '<td colspan="2">';
    echo '<ul>';
    echo '<li>Phone: ' . htmlspecialchars($row['phone']) . '</li>';
    echo '<li>Email: ' . htmlspecialchars($row['email']) . '</li>';
    echo '<li>Gender: ' . htmlspecialchars($row['gender']) . '</li>';
    echo '<li>Birthdate: ' . htmlspecialchars($row['birthdate']) . '</li>';
    echo '<li>Weight: ' . htmlspecialchars($row['weight']) . '</li>';
    echo '<li>Zipcode: ' . htmlspecialchars($row['zipcode']) . '</li>';
    echo '<li>District: ' . htmlspecialchars($row['district']) . '</li>';
    echo '<li>Area: ' . htmlspecialchars($row['area']) . '</li>';
    echo '<li>Landmark: ' . htmlspecialchars($row['landmark']) . '</li>';
    echo '</ul>';
    echo '</td>';
    echo '</tr>';
}

// End the table
echo '</table>';
$stmt2->close();
?>
<style>
  .hidden-row {
    display: none;
    background-color: #f2f2f2;
    transition: all 0.3s ease-in-out;
  }

  .show-row {
    display: table-row;
    background-color: #f2f2f2;
    transition: all 0.3s ease-in-out;
  }

  .hidden-row ul {
    list-style: none;
    padding: 0;
  }

  .hidden-row li {
    margin: 5px 0;
  }
</style>
<script>
  // JavaScript to toggle the visibility of details when a row is clicked
  const rows = document.querySelectorAll('.details-row');
  rows.forEach((row) => {
    row.addEventListener('click', () => {
      const nextRow = row.nextElementSibling;
      nextRow.classList.toggle('show-row');
    });
  });
</script>





    </body>

</html>
