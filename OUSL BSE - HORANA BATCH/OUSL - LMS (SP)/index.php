<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Miha Institute - log in or sign up</title>
</head>

<body>

    <?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ouslbsehoranabatch";

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
        echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
        exit;
    } else {
        // User does not exist, show an error message
        echo "<script>alert('Invalid username or password.');</script>";
    }
}
?>

    <div class="container">

        <div class="upper-c">
            <h1 class="title">OUSL BSE - HORANA BATCH</h1>
        </div>
        <form method="post">
            <div class="lower-c">

                <div class="lower-1">

                    <input type="text" placeholder="Username" class="textf1" id="username" name="username" required>
                    <input type="password" placeholder="Password" class="passf1" id="password" name="password" required>
                    <label class="textf2"><input type="checkbox">Remember username</label>
                    <button type="submit" class="btnsub">Log in</button>
        </form>
    </div>
    <div class="lower-2">
        <p class="p1">Forgotten your username or password?</p>
        <p class="p2">Cookies must be enabled in your browser</p>
        <p class="p3">Some courses may allow guest access</p>
        <a href="form.php"><button type="button" class="btncre">Create a new account</button></a>
    </div>
    </div>

    </div>
    <div class="footer">Designed & Developed by: Ushan Warnakulasooriya</div>




</body>


</html>