<?php
global $con;
session_start();

include ("connections.php");
include ("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="homepagestyle.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="https://github.com/kaisar149" target="_blank">
                <img src="img/stixhi3-removebg-preview.png" class="logo" alt="" title="Github">
            </a>
            <nav>
                <ul>
                    <li><a href="index.php" title="Homepage">HOME</a></li>
                    <!--<li><a href="#">REGION</a></li>
                    <li><a href="#">ABOUT</a></li>-->
                </ul>
            </nav>
            <a href="logout.php">
                <img src="img/logout-icon-png-3.jpg" class="logout-icon" alt="" title="Logout">
            </a>
        </div>

        <div class="row">
            <div class="col">
                <h1>Hello, <?php echo $user_data['user_name']; ?></h1>
                <h3>I'm Mark Kaisar</h3>
                <p id="Reg_NO">Reg No: ENE212-0067/2022</p>
                <a href="https://www.youtube.com/@stixhistishi" target="_blank">
                    <button type="button" title="Explore Youtube">Explore</button>
                </a>
            </div>
            <div class="col">
                <a href="https://www.youtube.com/@stixhistishi" target="_blank" title="YouTube">
                    <div class="card card1">
                        <h5>YouTube</h5>
                        <p>Check out my YouTube</p>
                    </div>
                </a>
                <a href="https://open.spotify.com/artist/4YN0CrB9XoG0Dq5L689KLw?si=xHCt5MrFQ1S2Gjnnk8sW6Q" target="_blank" title="Spotify">
                    <div class="card card2">
                        <h5>Spotify</h5>
                        <p>Check out my Spotify</p>
                    </div>
                </a>
                <a href="https://www.patreon.com/stixhistishi" target="_blank" title="Patreon">
                    <div class="card card3">
                        <h5>Patreon</h5>
                        <p>Check out my Patreon</p>
                    </div>
                </a>
                <a href="https://github.com/kaisar149" target="_blank" title="Github">
                    <div class="card card4">
                        <h5>Github</h5>
                        <p>Here's my github</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
