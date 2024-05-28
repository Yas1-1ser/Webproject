<?php
require 'src/config.php';

$select = new Select();

if (!empty($_SESSION["id"])) {
    $user = $select->selectUserById($_SESSION["id"]);
} else {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="Home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <section id="headercon">
        <a href="#"><img src="img/logo.png" class="logo" alt="" /></a>
        <div class="navbar">
            <ul>
                <li><a href="Home.php"> Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="conatct.php">Contact Us</a></li>
                <li><a href="registre.php">Sign Up</a></li>
                <li><a href="login.php">Log In</a></li>
                <li>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
            </ul>
        </div>
    </section>
    <div class="linkrig">
        <div class="top">
            <a href="src/diconn.php"> <button class="btn">Log Out</button></a>
            <a href="src/list.php"> <button class="btn">All Users</button></a>


        </div>
        <div class="boxmain">
            <div class="top">
                <div class="box">
                    <p>Welcome <b><?php echo $user["name"]; ?></b>.</p>
                </div>
                <div class="box">
                    <p>Your email is: <b><?php echo $user["email"]; ?></b>.</p>
                </div>


            </div>
        </div>
    </div>


    <footer class="secp1">
        <div class="colu">
            <img src="img/logo.png" alt="" />
            <h4>Contact</h4>
            <p><strong>Address: </strong>Tissemsilt Bourdj Bounaama</p>
            <p><strong>Phone: </strong>+213 06########</p>
            <p><strong>Hours: </strong> 9:00 - 18:00 , Mon - Wend</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fa-brands fa-discord"></i>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>©️2024,Yasser Adj-HTML CSS SQL</p>
        </div>
    </footer>
</body>

</html>