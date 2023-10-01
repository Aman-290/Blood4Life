<?php
// PHP code to retrieve patient and donor names from your database
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "data4life"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$patientNames = [];
$donorNames = [];

// Retrieve patient names
$patientQuery = $conn->query("SELECT name FROM patient");
if ($patientQuery->num_rows > 0) {
    while ($row = $patientQuery->fetch_assoc()) {
        $patientNames[] = $row["name"];
    }
}

// Retrieve donor names
$donorQuery = $conn->query("SELECT name FROM donor");
if ($donorQuery->num_rows > 0) {
    while ($row = $donorQuery->fetch_assoc()) {
        $donorNames[] = $row["name"];
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete-button"])) {
    $selectedName = isset($_POST["select-details"]) ? $_POST["select-details"] : "";
    $deleteOption = isset($_POST["delete-option"]) ? $_POST["delete-option"] : "";
    
    if (!empty($selectedName) && !empty($deleteOption)) {
        if ($deleteOption === "delete-patient") {
            $sql = "DELETE FROM patient WHERE name = ?";
        } elseif ($deleteOption === "delete-donor") {
            $sql = "DELETE FROM donor WHERE name = ?";
        }
        
        if (isset($sql)) {
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $selectedName);
            $stmt->execute();
            $stmt->close();
            
            header("Location: ".$_SERVER['PHP_SELF']);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="shortcut icon" href="./logo.jpeg" type="image/svg+xml">

<!--css-->
<link rel="stylesheet" href="./assets/css/style.css">

    <style>
        body {
    display: flex;
    font-family: Arial,sans-serif;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    height: 100vh; /* Make the body cover the entire viewport height */
    margin: 0;
}

.container3 {
    min-width: 50%;
    max-width: 600px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
    z-index: 1;
}


        h1 {
            text-align: center;
         
        }

        select, button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #details-dropdown {
            display: none;
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

        <div class="container3">
            
            <h1>Admin Panel</h1>
            <form method="post">
            <label for="delete-option">Select Action:</label>
            <select id="delete-option" name="delete-option">
                <option value="none">Select Action</option>
                <option value="delete-patient">Delete Patient</option>
                <option value="delete-donor">Delete Donor</option>
            </select>

            <div id="details-dropdown">
                <label for="select-details">Select Details:</label>
                <select id="select-details" name="select-details">
                    <option value="none">Select Details</option>
                    <!-- Populate with patient or donor details -->
                </select>
            </div>

            <button type="submit" name="delete-button" id="delete-button" disabled>Delete</button>
            </form>
            <?php
            echo '</br></br><button onclick="window.location.href=\'registerp.php\'">Add Patients</button>';
            echo '<button onclick="window.location.href=\'register.php\'">Add Donors</button>';
            //<button id="add-button">Add Patient/Donor</button>?>
        </div>

    <script>
        const deleteOption = document.getElementById('delete-option');
        const detailsDropdown = document.getElementById('details-dropdown');
        const selectDetails = document.getElementById('select-details');
        const deleteButton = document.getElementById('delete-button');
        const addButton = document.getElementById('add-button');
        
        // Function to populate the "Select Details" dropdown based on the selected option
        function populateDetailsDropdown(selectedOption) {
            selectDetails.innerHTML = '<option value="none">Select Details</option>';
            
            const names = selectedOption === 'delete-patient' ? <?php echo json_encode($patientNames); ?> : <?php echo json_encode($donorNames); ?>;
            
            names.forEach((name) => {
                const option = document.createElement('option');
                option.value = name;
                option.textContent = name;
                selectDetails.appendChild(option);
            });
        }
        
        deleteOption.addEventListener('change', function () {
            if (this.value === 'none') {
                detailsDropdown.style.display = 'none';
                deleteButton.disabled = true;
            } else {
                detailsDropdown.style.display = 'block';
                populateDetailsDropdown(this.value);
            }
        });
        
        selectDetails.addEventListener('change', function () {
            if (this.value === 'none') {
                deleteButton.disabled = true;
            } else {
                deleteButton.disabled = false;
            }
        });


    addButton.addEventListener('click', function () {
        const selectedOption = deleteOption.value;

        if (selectedOption === 'delete-donor') {
            // Redirect to register.php for donor registration
            window.location.href = 'register.php';
        } else if (selectedOption === 'delete-patient') {
            // Redirect to registerp.php for patient registration
            window.location.href = 'registerp.php';
        }
    });
        
    </script>
</body>
</html>
