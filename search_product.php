<!--connect file-->


<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();

?>




<!DOCTYPE html>
<html>

<head>
  <title>Ecommerce Website using php and mysql</title>
  <!--bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />






  <!--css file-->
  <link rel="stylesheet" href="style.css">


  <link rel="stylesheet" href="../shruti/style.css" />


  <style>
    body {
      overflow-x: hidden;



    }


    .logo {

      width: 8%;
      height: 8%;
    }

    body {
      background-image: url('images/k5.jpg');
      background-repeat: no-repeat;
      background-size: 1300px 400px;
    }
  </style>
</head>

<body>



  <!--navbar-->



  <nav style="background-image: url('./images/k5.jpg'); background-size: cover;background-repeat: no-repeat; 	background-size: 100% 100%; height:400px">
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            <li class="nav-item">
              <a class="nav-link active text-light" style="font-family:Serif" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" style="font-family:Serif" href="display_all.php">Products</a>
            </li>
            <?php

            if (isset($_SESSION['username'])) {

              echo "<li class='nav-item'>
          <a class='nav-link text-light' style='font-family:Serif' href='./user_area/profile.php'>My Account</a>
        </li>";
            } else {

              echo "<li class='nav-item'>
          <a class='nav-link text-light' style='font-family:Serif' href='./user_area/user_registration.php'>Register</a>
        </li>";;
            }

            ?>

            <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping" style="color:white"></i><sup style="color:white"><?php cart_item(); ?></sup></a>
            </li>

          </ul>

          <form class="d-flex" action="search_product.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">


            <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">




          </form>
        </div>
      </div>
  </nav>



  <?php
  cart();

  ?>



  <!--second child-->
  <nav class="nav.navbar.navbar-expand-lg navbar-dark bg ">
    <ul class="navbar-nav me-auto">

      <?php



      if (!isset($_SESSION['username'])) {

        echo "<li class='nav-item mx-3'>
          <a class='nav-link text-light' style='font-family:Serif' href='#' > Welcome Guest</a>
          </li>";
      } else {

        echo "<li class='nav-item mx-3'>
           <a class='nav-link text-light'  style='font-family:Serif' href='#'> Welcome " . $_SESSION['username'] . "</a>
           </li>";
      }






      if (!isset($_SESSION['username'])) {

        echo "<li class='nav-item mb-5 mx-3'>
          <a class='nav-link w-50 text-light'   style='font-family:Serif' href='./user_area/user_login.php'>Login</a>
        </li>";
      } else {

        echo "<li class='nav-item mb-5 mx-3'>
          <a class='nav-link text-light' href='./user_area/logout.php'>Logout</a>
        </li>";
      }



      ?>

    </ul>


  </nav>


  <h2 class="text-center" style="margin-top:10px;font-family:Serif;font-size:40px"> Products</h2>


  <!--fourth child-->
  <div class="row px-3" style="margin-top:3%;margin-left:5%">
    <div class="col-md-10">
      <!--all the products-->
      <div class="row">

        <!--fetching products-->

        <?php
        search_products();
        get_unique_categories();
        get_unique_brands();

        ?>
        <!--<div class="col-md-4 mb-2">
<div class="card" >
  <img src="./images/pens.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
	 <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>-->





        <!--last child-->
        <!--include footer-->
        <div style="margin-top:10%">
          <?php
          include("./includes/footer.php")


          ?>
        </div>
        <!--bootstrap js link-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>