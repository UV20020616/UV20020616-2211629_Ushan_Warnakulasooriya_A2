<!DOCTYPE html>
<html>
<head>
  <title>GameHaven</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
  <div class="left">
    <h2>Log in</h2>
    <div class="login-logo">
      <div class="logo1"><div class="icons8-facebook"></div></div>
      <div class="logo2"><div class="icons8-google"></div></div>
      <div class="logo3"><div class="icons8-apple-logo"></div></div>
    </div>
    <div class="or-div">
      <hr><div class="or">or</div><hr>
    </div>
    <form method="post">
  
      <input type="text" id="username" name="username" placeholder="Username" required>

 
      <input type="password" id="password" name="password" placeholder="**********" required>

      <input type="submit" value="Submit" >
   
    <div class="create-ac">

    <p> <a href="form.php">No account yet? </a>.</p>  
    <p> <a href="#">Lost Password? </a>.</p> 

    </div>
    </form>
   
  </div>
  <div class="right">

  </div>
</div>
</body>
</html>

<?php

// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "gamehaven";

$conn = new mysqli($host, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the user exists
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User exists, log them in and redirect to profile.php
        session_start();
        $_SESSION['username'] = $username;
         header("Location: home.php");
         
        exit;
    } else {
        // User does not exist, show an error message
        echo "<script>alert('Invalid username or password.');</script>";
    }
   
}
?>