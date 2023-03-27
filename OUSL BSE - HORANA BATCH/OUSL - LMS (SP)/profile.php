<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  exit;
}

// Connect to the database
$server = "localhost";
$user = "root";
$password = "";
$database = "ouslbsehoranabatch";

$conn = mysqli_connect($server, $user, $password, $database);


// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user's information from the database
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  $name_with_initials = $row['name_with_initials'];
  $email = $row['email'];
  $city = $row['city'];
  $academic_year = $row['academic_year'];
  $fullname = $row['fullname'];
} else {
  echo "Error: User not found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title class="name_with_initials"></title>
</head>

<body class="b1">

    <!-- Navigation Bar -->
    <div class="navbar">

        <div class="navbar_firstli">

            <a id="menu-ico" href=""><i class="fa-sharp fa-solid fa-bars"></i></a>
            <h1 class="nav_cites"><label class="highl">CITES</label></h1>
            </h1>
            <h1 class="nav_secondli"><label class="highl">Quick Links</label></h1>
            <h1 class="nav_secondli"><label class="highl">Mobile app</label></h1>

        </div>

        <div class="navbar_secondli">

            <a id="bell-ico" href=""><i class="fa-solid fa-bell"></i></a>
            <a id="msg" href=""><i class="fa-solid fa-comment"></i></a>
            <h1 class="name_with_initials" style="font-size: 15px; color:#0f6fc5; font-weight: 400; cursor: pointer;">
                <?php echo $name_with_initials; ?></h1>
            <div id="mini_image_preview" class="mini-image-div"></div>

        </div>
    </div>

    <!-- Profile -->
    <div class="profile" style="font-size: 20px;">

        <div class="mini_profile">

            <div id="profile_picture" class="profile-picture-div"></div>
            <h1 class="name_with_initials" style="font-weight: lighter;"><?php echo $name_with_initials; ?></h1>
            <div class="inbox">
                <a id="msg" href="#"><i class="fa-solid fa-comment fa-xs"><label
                            class="inbox_msg">Message</label></i></a>
            </div>
        </div>

        <div class="mp-2div">


            <div class="mp_div-p1">
                <h4 class="dt1_2"><a class="link" href="#"> <label class="ul">Dashboard</label></a></h4>
                <h4 class="dt1_2esp">/</h4>
                <h4 class="dt1_2"><a class="link" href="#"> <label class="ul">Profile</label></a></h4>
            </div>


            <div class="buttons">
                <button class="btn2_sp" type="menu">Customise this page</button>



                <button class="btn2_sp" type="menu">Log out</button>



            </div>
        </div>

        <div class="submain">
            <div class="m_details">

                <div class="details1_1">

                    <div class="details1_1_main">

                        <h3 class="dt1_1">User Details</h3>

                        <h3 class="li_s-right"><a class="link" href="#"><label class="ul">Edit profile</label></a></h3>

                        <h3 class="dt1_2">Email address</h3>
                        <h4 class="dt1_3"><a class="link" href="#"> <label class="ul"><label
                                        id="email"><?php echo $email; ?></label></a>
                            (Visible to other course
                            participants)</h4>

                        <h3 class="dt1_2">Country</h3>
                        <h4 class="dt1_3">Sri Lanka</h4>

                        <h3 class="dt1_2">City/town</h3>
                        <h4 class="dt1_3"><label id="city"><?php echo $city; ?></label></h4>

                        <h3 class="dt1_2">Academic year</h3>
                        <h4 class="dt1_3"><label id="academic_year"><?php echo $academic_year; ?></label></h4>

                        <h3 class="dt1_2">Denoted by initials</h3>
                        <h4 class="dt1_3"><label id="fullname"><?php echo $fullname; ?></label></h4>
                    </div>

                    <div class="privacy">
                        <h1 class="li_m">Privacy and policies</h1>
                        <h3 class="li_s"><a class="link" href="#">Data retention summary</a></h3>
                    </div>

                    <div class="course_details">
                        <h1 class="li_m">Course details</h1>
                        <h3 class="cp">Course profiles</h3>
                        <h3 class="li_s"><a class="link" href="#">EEI3266- Information Systems & Data Management</a>
                        </h3>
                        <h3 class="li_s"><a class="link" href="#">EEI3346 - Web Application Development</a></h3>
                        <h3 class="li_s"><a class="link" href="#">EEX3467 - Software Engineering Concepts and
                                Programming</a></h3>
                        <h3 class="li_s"><a class="link" href="#">AGM3263 -Communication Skills</a></h3>
                        <h3 class="li_s"><a class="link" href="#">EEX3373 - Communication and Computer Technology</a>
                        </h3>
                        <h3 class="li_s"><a class="link" href="#">EEI3372-Programming in Python</a></h3>
                        <h3 class="li_s"><a class="link" href="#">MHZ3459 - Basic Mathematics for Computing</a></h3>
                    </div>

                </div>

                <div class="details2_1">

                    <div class="dt2_2">
                        <h1 class="li_m">Miscellaneous</h1>
                        <h3 class="li_s"><a class="link" href="#">Blog entries</a></h3>
                        <h3 class="li_s"><a class="link" href="#">Forum posts</a></h3>
                        <h3 class="li_s"><a class="link" href="#">Forum discussions</a></h3>
                    </div>

                    <div class="dt2_3">

                        <h1 class="li_m">Reports</h1>
                        <h3 class="li_s"><a class="link" href="#">Browser sessions</a></h3>
                        <h3 class="li_s"><a class="link" href="#">Grades overview</a></h3>

                    </div>
                    <div class="dt2_4">

                        <h1 class="li_msp">Login activity</h1>

                        <h3 class="dt1_2">First access to site</h3>
                        <h4 class="dt1_3">Friday, 13 January 2023, 11:37 AM (46 days 20 hours)</h4>

                        <h3 class="dt1_2">Last access to site</h3>
                        <h4 class="dt1_3">Wednesday, 1 March 2023, 8:29 AM (1 sec)</h4>


                    </div>

                    <div class="dt2_5">

                        <h1 class="li_msp">Mobile app</h1>

                        <h3 class="dt1_2">QR code for mobile app access</h3>
                        <h4 class="dt1_3">Scan the QR code with your mobile app to fill in the site URL in your app.
                        </h4>
                        <img class="qr" src="images/qr.png">
                        <h4 class="dt1_3">This site has mobile app access enabled.</h4>
                        <h3 class="li_ssp"><a class="link" href="#"> <label class="ul">Download the mobile app.</label>
                            </a></h3>

                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="footer">Designed and Developed by: Ushan Warnakulasooriya</div>

</body>

</html>