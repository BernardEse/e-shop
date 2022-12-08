<?php session_start();  ?>


<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <title>Bernard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="css/login.css"> -->
  <link rel="stylesheet" href="css/sty.css">
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="icons/fontawesome/css/all.min.css">
</head>
<body>
  
  <!---showcase---->
  
  <div class="navbar">
    <div class="container flex">
      <div class="flexx">
        <h1 class="logo">e-Shop</h1>
        <div class="hamburger" > <i class="fa fa-bars " id="menu_btn"></i> </div> 
      </div>
      
      <nav class="nav-links-hide" id="nav-links">
        <ul >
        <?php if (isset($_SESSION['username'])) : ?>

          <li><a href="index.php">Home</a></li>
          <li><a href=""><?php echo $_SESSION['username'] ?></a></li>
          <li><a href="create.php">Create</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="features.php">Features</a></li>
          <?Php else : ?>

            <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="docs.html">About</a></li>

          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </div>


 