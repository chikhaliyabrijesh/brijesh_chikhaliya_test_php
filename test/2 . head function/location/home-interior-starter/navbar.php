<?php


session_start();

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="//fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

  <title>Home Interior - Interior Category Bootstrap Responsive Website Template | Home : W3layouts</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<!--header-->
<!-- <header> -->
  <div class="container">
      <nav class="navbar navbar-expand-lg">
          <h1><a class="navbar-brand" href="index.php">
                  <span class="sub-log">Home</span> Interior
              </a></h1>
          <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
          </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-lg-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                  
                <li class="nav-item @@about__active">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item @@contact__active">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <?php

                if(!isset($_SESSION["email"]))
                {
                ?>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Account</a>
                </li>

                <?php

                }
                else
                {
                ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="login.php">Welcome :<?php
                    echo $_SESSION["email"]; ?></a>

                    <ul class="dropdown-menu" style="max-width : 100px !important">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Manage Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php" onclick="return confirm('Are You Sure To Logout ?')">Logout</a>
                        </li>
                    </ul>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>

          
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container py-1">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
<!-- </header> -->
<!-- //header -->
