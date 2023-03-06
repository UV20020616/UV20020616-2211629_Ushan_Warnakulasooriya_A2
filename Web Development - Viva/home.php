<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home | GameHaven</title>
</head>

<body>
  
    <! -- Navigation Bar -->

        <nav class="navbar">
            <div class="container">
                <h1><a class="logo" href="index.html">GameHaven</a></h1>

                <div class="pg-div">
                    <ul class="pg-ul">
                        <li><a href="#homepage" class="active">HOMEPAGE</a></li>
                        <li><a href="#esports">ESPORTS</a></li>
                        <li><a href="#reviews">REVIEWS</a></li>
                        <li><a href="#news">NEWS</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="#about">ABOUT</a></li>
                    </ul>
                </div>

                <div class="navbar-icons">
                    <ul>
                        <li class="temp-hide-ico"><a id="twitter-ico" href=""><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="temp-hide-ico"><a id="fb-ico" href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="temp-hide-ico"><a id="insta-ico" href=""><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="temp-hide-ico"><a id="yt-ico" href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li class="temp-hide-ico"><a id="tiktok-ico" href=""><i class="fa-brands fa-tiktok"></i></a>
                        </li>
                        <li class="temp-hide-ico"><a id="vk-ico" href=""><i class="fa-brands fa-vk"></i></a></li>
                        <li class="temp-hide-ico"><a id="discord-ico" href=""><i class="fa-brands fa-discord"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="res-icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <div class="topnav" id="myTopnav">
            <ul>
                <a href="#homepage" class="active-res" style="color: crimson;">HOMEPAGE</a>
                <a href="#esports">ESPORTS</a>
                <a href="#reviews">REVIEWS</a>
                <a href="#news">NEWS</a>
                <a href="#contact">CONTACT</a>
                <a href="#about">ABOUT</a>

            </ul>

        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

        <!--Main Image-->
        <div class="img-border"></div>
         <!--Intro-msg-->
         <div class="intro-msg">
            <div class="intro-msg-div">
                <p class="intro-p">Welcome to GameHaven, the ultimate destination for gaming enthusiasts and esports fans.
                    We are dedicated to bringing you the latest news, reviews, and insights from the world of gaming and esports.
                    Our team of experienced gamers and industry experts is committed to delivering high-quality content that is 
                    both informative and entertaining. Whether you're looking for in-depth game reviews, expert strategies, or the 
                    latest developments in the world of esports, we've got you covered. Join our vibrant community of like-minded
                    gamers and stay up-to-date on everything gaming-related. Let's level up together!

            </div>
        
        </p>
                 
           
         </div>

        <!--Games-->
        <div class="games">
        
            <div class="games-showcase">

                <div class="gmc">
                    <img src="Images/dota2.png" width="200px" height="auto">
                </div>

                <div class="gmc">
                    <img src="Images/csgo.png" width="200px" height="auto">
               
                </div>

                 <div class="gmc">
                    <img src="Images/fortnite.png" width="200px" height="auto">
                   
                  
                </div>
                    
                <div class="gmc">
                
                    <img src="Images/codmw.png" width="200px" height="auto">
                </div>
               
            </div>

        </div>
          <!--Videos-->
          <div class="videos"></div>
      
        <!--Footer-->
        <div class="b-footer">
            <div class="bf1">

                <ul>
                    <li class="sp-li">
                        <h2><u class="sp-u">GameHaven</u></h2>
                    </li>
                    <p class="f-intro-p"> Welcome to GameHaven, the ultimate destination for gaming enthusiasts and
                        esports fans.
                        We are dedicated to bringing you the latest news, reviews, and insights from the world of gaming
                        and esports.
                    </p>
                    <p class="f-intro-p">
                        Our team of experienced gamers and industry experts is committed to delivering high-quality
                        content that is
                        both informative and entertaining.</p>

                    <p>Whether you're looking for in-depth game reviews, expert strategies, or the
                        latest developments in the world of esports, we've got you covered. Join gaming community, level
                        up together.
                    </p>
                </ul>

            </div>

            <div class="bf2">
                <ul>
                    <li class="sp-li">
                        <h2><u class="sp-u">Recent Posts</u></h2>
                    </li>
                    <li><a href="#rp1">Farewell VALORANT, for now...</a></li>
                    <li><a href="#rp2">An update on OG CS:GO Academy</a></li>
                    <li><a href="#rp3">OG welcomes DM as new offlaner</a></li>
                </ul>
            </div>

            <div class="bf3">
                <ul>
                    <li class="sp-li">
                        <h2><u class="sp-u">Pages</u></h2>
                    </li>
                    <div class="rspli">
                        <li><a href="#homepage">Homepage</a></li>
                        <li><a href="#esports">Esports</a></li>
                        <li><a href="#reviews">Reviews</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#about">About</a></li>
                    </div>
                </ul>
            </div>

            <div class="bf4">
                <ul>
                    <li class="sp-li">
                        <h2><u class="sp-u">Social Networks</u></h2>
                    </li>
                    <div class="rspli">
                        <li><a href="#twitter">Twitter</a></li>
                        <li><a href="#fb">Facebook</a></li>
                        <li><a href="#instagram">Instergram</a></li>
                        <li><a href="#yt">Youtube</a></li>
                        <li><a href="#tiktok">Tiktok</a></li>
                        <li><a href="#vk">VK</a></li>
                        <li><a href="#disco9rd">Discord</a></li>
                    </div>
                </ul>

            </div>
        </div>

        <footer class="footer2">
            <p class="footer2-p1">Copyright 2023 GameHaven All rights reserved.</p>
            <p class="footer2-p2">Designed and Developed by: Ushan Warnakulasooriya</p>
        </footer>




</body>

</html>