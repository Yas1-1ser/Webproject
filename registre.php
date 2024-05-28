<?php
require 'src/config.php';
$register = new Register();

if (isset($_POST["submit"])) {
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if ($result == 1) {
    echo
    "<script> alert('Registration Successful'); </script>";
  } elseif ($result == 10) {
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  } elseif ($result == 100) {
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup</title>
  <link rel="stylesheet" href="Home.css" />
  <link rel="stylesheet" href="regst.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />



</head>

<body>
  <section id="headercon">
    <a href="#"><img src="img/logo.png" class="logo" alt="" /></a>
    <div class="navbar">
      <ul>
        <li><a href="Home.php"> Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="conatct.php">Contact Us</a></li>
        <li><a class="act" href="registre.php">Sign Up</a></li>
        <li><a href="login.php">Log In</a></li>
        <li>
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
      </ul>
    </div>
  </section>
  <div class="container">
    <div class="box form-box">
      <header>Sign Up</header>


      <form action="" method="Post">
        <div class="field input">



          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your name" required>
          <label for="username">Username</label>
          <input type="text" name="username" id="username" placeholder="Enter your username" required>
          <label for=" email">Email</label>
          <input type="text" name="email" id="email" placeholder="Enter your email" autocomplete="off" required />
        </div>
        <div class="field input">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter your Password" autocomplete="off" required />
          <label for="password">Confirm Password</label>
          <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter your Password" autocomplete="off" required />

        </div>

        <div class=" field">
          <input type="submit" class="btn" name="submit" value="Signup" required />
        </div>
        <div class="links">
          You have account? <a href="login.php">Login Now</a>
        </div>
      </form>
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