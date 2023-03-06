<!DOCTYPE html>
<html>
<head>
  <title>GameHaven</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

<div class="container">
  <div class="left">

  <form action="" method="POST" id="login-form">
 <div class="div1">

 <div class="d1">
 <input type="text" id="username" name="username" placeholder="Username" required>
 </div>

 <div class="d2">
 <input type="password" id="password" name="password" placeholder="Password" required>
 </div>

 </div>

 <div class="div1">

<div class="d1">
<input type="email" id="email" name="email" placeholder="Email" required>
</div>

<div class="d2">
<input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
</div>

</div>

<div class="div1">

<div class="d1">
<input type="text" id="country" name="country" placeholder="Country" required>
</div>

<div class="d2">
<input type="text" id="city" name="city" placeholder="City" required>
</div>

</div>
<div class="div2">

<div class="d3"><input type="submit" value="Submit"></div>

</div>

</form>
<a href="index.php"><p class="back"> « Back</p></a>

   
  </div>
  <div class="right">

  </div>
</div>
</body>
</html>
<?php

// Connect to the database
$server = "localhost";
$user = "root";
$password = "";
$database = "gamehaven";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
  die("Database Not Connected" . mysqli_connect_error());
} else {
  echo "";
}

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['city']) && isset($_POST['country']) && isset($_POST['fullname'])) {
  $UserName = $_POST['username'];
  $Email = $_POST['email'];
  $Password = $_POST['password'];
  $City = $_POST['city'];
  $Country = $_POST['country'];
  $FullName = $_POST['fullname'];

  // Check if any required field is empty
  if ($UserName == '' || $Email == '' || $Password == '' || $City == '' || $Country == '' || $FullName == '') {
    echo "Error: All fields are required";
  } else {
    $query = "INSERT INTO users(username,email,password,city,country,fullname)VALUES(
      '$UserName','$Email','$Password','$City','$Country','$FullName')";

    if (mysqli_query($conn, $query)) {
       echo "<meta http-equiv='refresh' content='0;url=index.php'>";
       exit;
    } else {
      echo "Data Not Inserted" . mysqli_error($conn);
    }
  }
} else {

}

?>