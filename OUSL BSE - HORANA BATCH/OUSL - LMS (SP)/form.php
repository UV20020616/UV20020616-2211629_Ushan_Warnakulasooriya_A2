<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <title>Register for Miha Institute</title>
</head>

<body>


  <?php
// Database Connection
$server = "localhost";
$user = "root";
$password = "";
$database = "ouslbsehoranabatch";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
  die("Database Not Connected" . mysqli_connect_error());
} else {
  echo "";
}

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name_with_initials']) && isset($_POST['city']) && isset($_POST['academic_year']) && isset($_POST['fullname'])) {
  $UserName = $_POST['username'];
  $Email = $_POST['email'];
  $Password = $_POST['password'];
  $NameWithInitials = $_POST['name_with_initials'];
  $City = $_POST['city'];
  $AcademicYear = $_POST['academic_year'];
  $FullName = $_POST['fullname'];

  // Check if any required field is empty
  if ($UserName == '' || $Email == '' || $Password == '' || $NameWithInitials == '' || $City == '' || $AcademicYear == '' || $FullName == '') {
    echo "Error: All fields are required";
  } else {
    $query = "INSERT INTO users(username,email,password,name_with_initials,city,academic_year,fullname)VALUES(
      '$UserName','$Email','$Password','$NameWithInitials','$City','$AcademicYear','$FullName')";

    if (mysqli_query($conn, $query)) {
      header("Location: index.php");
      exit;
    } else {
      echo "Data Not Inserted" . mysqli_error($conn);
    }
  }
} else {

}

?>
  <div class="container">
    <h1>Create an Account</h1>
    <table>
      <form action="" method="POST" id="login-form">
        <tr>
          <td><label for="username-input">Username:</label></td>
          <td><input type="text" id="username-input" name="username" required></td>
        </tr>
        <tr>
          <td><label for="email-input">Email:</label></td>
          <td><input type="email" id="email-input" name="email" required></td>
        </tr>
        <tr>
          <td><label for="password-input">Password:</label></td>
          <td><input type="password" id="password-input" name="password" required></td>
        </tr>
        <tr>
          <td><label for="name-input">Name with initials:</label></td>
          <td><input type="text" id="name-input" name="name_with_initials" required></td>
        </tr>
        <tr>
          <td><label for="city-input">City:</label></td>
          <td><input type="text" id="city-input" name="city" required></td>
        </tr>
        <tr>
          <td><label for="academic-year-input">Academic year:</label></td>
          <td><input type="text" id="academic-year-input" name="academic_year" required></td>
        </tr>
        <tr>
          <td><label for="full-name-input">Full name:</label></td>
          <td><input type="text" id="full-name-input" name="fullname" required></td>
        </tr>
        <tr>
          <a href="index.php"><td colspan="2" style="text-align:center;"><button type="submit" id="submit-button">Register Now</button></td></a> 
        </tr>
      </form>
    </table>
  </div>


</body>

</html>