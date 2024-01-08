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
    /* Hide the bottom scrollbar */
    body {
      overflow-x: hidden;
    }

    /* Customize scrollbar color and height */
    body::-webkit-scrollbar {
      height: 1px;
      width: 1px;
    }


    .hide-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .logo {

      width: 8%;
      height: 8%;
    }

    .hide-bullets li {
      list-style-type: none;
    }


    @media screen and (min-width: 768px) {
      div[style*='grid'] {
        margin-left: 50px;
        margin-right: 50px;
        margin: 50px;
      }
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
    </div>



    <?php
    cart();

    ?>


    <!--second nav child-->
    <div class="nav.navbar.navbar-expand-lg navbar-dark bg ">
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

    </div>

  </nav>




  <!--Treading Products-->
  <div style=" width:100%">
    <h2 class="text-center" style="margin-top:20px;font-family:Serif;font-size:40px">Trending Products</h2>
    <!--fetching products-->

    <div class="hide-scrollbar" style="display:flex; white-space: nowrap;overflow-y: hidden;overflow-x: auto;  width: 100%;  gap:10%">

      <?php

      getproducts();
      get_unique_categories();
      get_unique_brands();
      ?>

    </div>

  </div>


  <!-- Category List -->

  <div>
    <h2 class="text-center" style="margin-top:7%;font-family:Serif;font-size:40px">Category</h2>
    <ul class="hide-scrollbar" style="display: flex; flex-direction: row; justify-content: space-between; gap: 30px; overflow-x: scroll;">
      <?php
      getcategories()
      ?>
  </div>


  <div>


    <!-- Collections -->

    <div style="display: flex; justify-content: center; gap: 30px; padding-left: 20px; padding-right: 20px;">
      <!-- collection item 1-->

      <div style="display: flex; justify-content: space-between; align-content: center; justify-items: center; border-radius:50px;width:500px;height:200px;background-image: url('./images/penbg.jpg'); background-size: cover;background-repeat: no-repeat; 	background-size: 100% 100%;">
        <div style="height: black; width: 70%; display: flex; flex-direction: column;justify-content: center; justify-items: flex-start; align-items: center; padding-top: 30px; ">
          <h1 class="text-black text-3xl font-bold" style="margin-left:20px">Pen Collections
          </h1>
          <p class="text-dark text-3xl   font-normal handwritten-front" style="margin-left:20px;font-size:25px;">
            Take for infinite imaginations
          </p>
        </div>
        <div>
          <img src="./images/assets/penCollections.png" alt="sk" style="width:80%;height:80%;" />

        </div>
      </div>

      <!-- collection item 2 -->
      <div style="display: flex; justify-content: space-between; align-content: center; justify-items: center; border-radius:50px;width:500px;height:200px;background-image: url('./images/notebookbg.jpg'); background-size: cover;background-repeat: no-repeat; 	background-size: 100% 100%;">
        <div style="height: black; width: 70%; display: flex; flex-direction: column;justify-content: center; justify-items: flex-start; align-items: center; padding-top: 30px; ">
          <h1 class="text-black text-3xl font-bold" style="margin-left:20px">NoteBooks & More
          </h1>
          <p class="text-dark text-3xl   font-normal handwritten-front" style="margin-left:20px;font-size:25px;">
            Capturing Ideas, One Page at a Time.
          </p>
        </div>
        <div>
          <img src="./images/assets/notebook-collections.png" alt="sk" style="width:80%;height:80%;" />

        </div>
      </div>
    </div>


    <!-- Brands -->



    <div>
      <h2 class="text-center" style="margin-top:7%;font-family:Serif;font-size:40px">Brands</h2>
      <ul class="hide-scrollbar" style="display: flex; flex-direction: row; justify-content: space-between; gap: 30px; overflow-x: scroll;">
        <?php
        getbrands();

        ?>
    </div>




    <!-- Collections set 1 -->

    <div style=" margin-top:30px; display: flex; justify-content:  space-around; gap: 30px; padding-left: 20px; padding-right: 20px;">
      <!-- collection 1 item 1-->

      <div style="display: flex; justify-content: space-between; align-content: center; justify-items: center; border-radius:50px;width:500px;height:200px;background-image: url('./images/greenbg.jpg'); background-size: cover;background-repeat: no-repeat; 	background-size: 100% 100%;">
        <div style="height: black; width: 70%; display: flex; flex-direction: column;justify-content: center; justify-items: flex-start; align-items: center; padding-top: 30px; ">
          <h1 class="text-black text-3xl font-bold" style="margin-left:20px">Organizers
          </h1>
          <p class="text-dark text-3xl   font-normal handwritten-front" style="margin-left:20px;font-size:25px;">
            Dash zen decoded
          </p>
        </div>
        <div>
          <img src="./images/assets/office-orgainizer.png" alt="sk" style="width:80%;height:80%;" />

        </div>
      </div>

      <!-- collection 1 item 2 -->
      <div style="display: flex; justify-content: space-between; align-content: center; justify-items: center; border-radius:50px;width:500px;height:200px;background-image: url('./images/pinkbg.jpg'); background-size: cover;background-repeat: no-repeat; 	background-size: 100% 100%;">
        <div style="height: black; width: 70%; display: flex; flex-direction: column;justify-content: center; justify-items: flex-start; align-items: center; padding-top: 30px; ">
          <h1 class="text-black text-3xl font-bold" style="margin-left:20px">File's & Folder's
          </h1>
          <p class="text-dark text-3xl   font-normal handwritten-front" style="margin-left:20px;font-size:25px;">
            Organizing Thoughts </p>
        </div>
        <div>
          <img src="./images/assets/filesandfolder.png" alt="sk" style="width:80%;height:80%;" />

        </div>
      </div>
    </div>



    <!-- Collections set 2 -->

    <div style="display: flex; margin-top: 30px; justify-content: space-around; gap: 30px; padding-left: 20px; padding-right: 20px;">
      <!-- collection 2 item 1-->

      <div style="display: flex; justify-content: space-between; align-content: center; justify-items: center; border-radius:50px;width:500px;height:200px;background-image: url('./images/purplebg.jpg'); background-size: cover;background-repeat: no-repeat; 	background-size: 100% 100%;">
        <div style="height: black; width: 70%; display: flex; flex-direction: column;justify-content: center; justify-items: flex-start; align-items: center; padding-top: 30px; ">
          <h1 class="text-black text-3xl font-bold" style="margin-left:20px">Staplers
          </h1>
          <p class="text-dark text-3xl   font-normal handwritten-front" style="margin-left:20px;font-size:25px;">
            Binding Your Thoughts

          </p>
        </div>
        <div>
          <img src="./images/assets/staplers.png" alt="sk" style="width:80%;height:80%;" />

        </div>
      </div>

      <!-- collection 2 item 2 -->
      <div style="display: flex; justify-content: space-between; align-content: center; justify-items: center; border-radius:50px;width:500px;height:200px;background-image: url('./images/bluebg.jpg'); background-size: cover;background-repeat: no-repeat; 	background-size: 100% 100%;">
        <div style="height: black; width: 70%; display: flex; flex-direction: column;justify-content: center; justify-items: flex-start; align-items: center; padding-top: 30px; ">
          <h1 class="text-black text-3xl font-bold" style="margin-left:20px">PaperClips
          </h1>
          <p class="text-dark text-3xl   font-normal handwritten-front" style="margin-left:20px;font-size:25px;">
            Keeping It Together </p>
        </div>
        <div>
          <img src="./images/assets/paperclips.png" alt="sk" style="width:80%;height:80%;" />

        </div>
      </div>
    </div>







    <!--      Supplies -->




    <div>
      <h2 class="text-center" style="margin-top:7%;font-family:Serif;font-size:40px"> Supplies</h2>
      <ul class="hide-bullets hide-scrollbar" style=" margin-top:30px;display: flex; flex-direction: row; justify-content: space-between; gap: 30px; overflow-x: scroll;">
        <li>
          <img src='./images/paint1.jpg' class='logo' style='width: 80px; height: 80px; border-radius: 50%;' />
          <a href='index.php?brand=$brand_id' class='nav-link'>Paint's</a>
        </li>
        <li>
          <img src='./images/brush1.jpg' class='logo' style='width: 80px; height: 80px; border-radius: 50%;' />
          <a href='index.php?brand=$brand_id' class='nav-link'>Brushes</a>
        </li>
        <li>
          <img src='./images/ap.jpg' class='logo' style='width: 80px; height: 80px; border-radius: 50%;' />
          <a href='index.php?brand=$brand_id' class='nav-link'>Art Pencils</a>
        </li>
        <li>
          <img src='./images/sketchbook2.jpg' class='logo' style='width: 80px; height: 80px; border-radius: 50%;' />
          <a href='index.php?brand=$brand_id' class='nav-link'>Sketchbook</a>
        </li>
        <li>
          <img src='./images/clay.jpg' class="logo" style='width: 80px; height: 80px; border-radius: 50%;' />
          <a href='index.php?brand=$brand_id' class='nav-link'>Clay</a>
        </li>

      </ul>
    </div>


    <!-- Supplies Collection -->

    <div style=" margin-top:30px; display: flex; justify-content:  space-around; gap: 30px; padding-left: 20px; padding-right: 20px;">
      <!-- collection 1 item 1-->

      <div style="display: flex; justify-content: space-between; align-content: center; justify-items: center; border-radius:50px;width:500px;height:200px;background-image: url('./images/greenbg.jpg'); background-size: cover;background-repeat: no-repeat; 	background-size: 100% 100%;">
        <div style="height: black; width: 70%; display: flex; flex-direction: column;justify-content: center; justify-items: flex-start; align-items: center; padding-top: 30px; ">
          <h1 class="text-black text-3xl font-bold" style="margin-left:20px">Brush Collections
          </h1>
          <p class="text-dark text-3xl   font-normal handwritten-front" style="margin-left:20px;font-size:25px;">
            Take for infinite imaginations
          </p>
        </div>
        <div>
          <img src="./images/assets/brushsets.png" alt="sk" style="width:80%;height:80%;" />

        </div>
      </div>

      <!-- collection 1 item 2 -->
      <div style="display: flex; justify-content: space-between; align-content: center; justify-items: center; border-radius:50px;width:500px;height:200px;background-image: url('./images/pinkbg.jpg'); background-size: cover;background-repeat: no-repeat; 	background-size: 100% 100%;">
        <div style="height: black; width: 70%; display: flex; flex-direction: column;justify-content: center; justify-items: flex-start; align-items: center; padding-top: 30px; ">
          <h1 class="text-black text-3xl font-bold" style="margin-left:20px">Color Set </h1>
          <p class="text-dark text-3xl   font-normal handwritten-front" style="margin-left:20px;font-size:25px;">
            Capturing Ideas and make it Colorful </p>
        </div>
        <div>
          <img src="./images/assets/paintColorSet.png" alt="sk" style="width:80%;height:80%;" />

        </div>
      </div>
    </div>



    <!-- wHAT NEW AND FAV -->

    <div style="margin-top: 30px; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; padding-left: 20px; padding-right: 20px; align-items: center; justify-items: center;">
      <!-- collection 1 item 1-->
      <div style="border-radius: 50px; width: 100%; height: 200px; background-image: url('./images/try2.jpg'); background-size: cover; background-repeat: no-repeat; background-size: 100% 100%;">
        <div style="height: 100%; width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <h1 class="text-2xl font-semibold">
            What's
            <span class="handwritten-front text-3xl text-pink-500 font-medium">New</span>
          </h1>
        </div>
      </div>

      <!-- collection 1 item 2 -->
      <div style="border-radius: 50px; width: 100%; height: 200px; background-image: url('./images/try2.jpg'); background-size: cover; background-repeat: no-repeat; background-size: 100% 100%;">
        <div style="height: 100%; width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <h1 class="font-semibold" style="font-size: 30px; margin-left: 13%; margin-top: 4%;">
            Customer
            <span class="handwritten-front text-3xl text-pink-500 font-medium">Favorite</span>
          </h1>
        </div>
      </div>
    </div>



    <!-- Offer Cards -->
    <div style="margin-top: 30px; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; padding-left: 20px; padding-right: 20px; align-items: center; justify-items: center;">

      <!-- Card 1 -->
      <div style="display: flex; justify-content: center; align-items: center; border-radius: 50px; width: 100%; height: 200px; background-image: url('./images/p11.jpg'); background-size: cover; background-repeat: no-repeat; background-size: 100% 100%;">
        <h1 class="text-2xl font-semibold" style="font-size: 22px; margin-top: 20px;">
          PRODUCT
          <span class="handwritten-front text-3xl text-pink-500 font-medium">under</span> 99
        </h1>
      </div>

      <!-- Card 2 -->

      <div style="display: flex; justify-content: center; align-items: center; border-radius: 50px; width: 100%; height: 200px; background-image: url('./images/p12.jpg'); background-size: cover; background-repeat: no-repeat; background-size: 100% 100%;">
        <h1 class="text-2xl font-semibold" style="font-size: 22px; margin-top: 20px;">
          PRODUCT
          <span class="handwritten-front text-3xl text-pink-500 font-medium">under </span>199
        </h1>
      </div>
      <!-- Card 3 -->

      <div style="display: flex; justify-content: center; align-items: center; border-radius: 50px; width: 100%; height: 200px; background-image: url('./images/p13.jpg'); background-size: cover; background-repeat: no-repeat; background-size: 100% 100%;">
        <h1 class="text-2xl font-semibold" style="font-size: 22px; margin-top: 20px;">
          PRODUCT
          <span class="handwritten-front text-3xl text-pink-500 font-medium">under </span>499
        </h1>
      </div>

    </div>



    <!-- Clearance Card -->
    <div style="display: flex; width: 100%; justify-content: center;align-items: center; justify-items: center;">
      <div style="width: 100%; max-width: 1200px; height: 60vh; display: flex; justify-content: center; align-items: center; overflow: hidden;">
        <div style="border-radius: 20px; width: 90%; height: 90%; background-image: url('./images/assets/Cover.svg'); background-size: cover; background-position: center; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
          <h2 class="font-bold text-4xl md:text-5xl lg:text-6xl text-white">
            Clearance <span class="handwritten-front text-5xl md:text-6xl lg:text-7xl">Sales</span>
          </h2>

          <h2 class="font-extrabold text-4xl md:text-5xl lg:text-6xl text-white">UP TO 50% OFF</h2>

          <h2 class="font-normal text-2xl md:text-3xl lg:text-4xl text-white">
            Big Discount, Big Saving
          </h2>
        </div>
      </div>
    </div>

    <?php
    include("./includes/footer.php")


    ?>

    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

</body>

</html>