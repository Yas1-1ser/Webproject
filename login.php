<?php
require 'src/config.php';


if (!empty($_SESSION["id"])) {
  header("Location: profile.php");
}

$login = new Login();

if (isset($_POST["submit"])) {
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if ($result == 1) {
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: profile.php");
  } elseif ($result == 10) {
    echo
    "<script> alert('Wrong Password'); </script>";
  } elseif ($result == 100) {
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="Home.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="log.css" />
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
        <li><a class="act" href="login.php">Log In</a></li>
        <li>
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
      </ul>
    </div>
  </section>
  <div class="container">
    <div class="box form-box">

      <header>Login</header>
      <form action="" method="post">
        <div class="field input">
          <label for="text">Email or username</label>
          <input type="text" name="usernameemail" id="usernameemail" autocomplete="off" required />
        </div>

        <div class="field input">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" autocomplete="off" required />
        </div>

        <div class="field">
          <input type="submit" class="btn" name="submit" value="Login" />
        </div>
        <div class="links">
          Don't have account? <a href="registre.php">Sign Up Now</a>
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