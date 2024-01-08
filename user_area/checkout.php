<!--connect file-->


<?php
include('../includes/connect.php');

session_start();
?>




<!DOCTYPE html>
<html>
<head>
<title>Ecommerce Website Checkout page</title>
<!--bootstrap CSS link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
<!--font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--css file-->
<link rel="stylesheet" href="style.css">

<style>
.logo{
	
	width:6%;
	height:6%;
	
}

</style>

</head>
<body>

<!--navbar-->

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
  
   <img src="../images/fiiii.png" alt="" class="logo"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      
		 <li class="nav-item">
          <a class="nav-link" href="#"> </a>
        </li>
      </ul>
      
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
       
		
		<input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
		
		
		
		
		
		
		
		
      </form>
    </div>
  </div>
</nav>



<!--second child-->
<nav class="nav.navbar.navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
 <li class="nav-item">
          <a class="nav-link" href="#">Welcome guest</a>
        </li>
		<?php
		
		if(!isset($_SESSION['username'])){
			
			echo "<li class='nav-item'>
          <a class='nav-link' href='./user_login.php'>Login</a>
        </li>";
			
		}else{
			
			echo "<li class='nav-item'>
          <a class='nav-link' href='logout.php'>Logout</a>
        </li>";
			
		}
		
		
		
	?>
		
</ul>


</nav>

<!--third child-->
<div class="bg-light">

<h3 class="text-center">Hidden Store</h3>
<p class="text-center">Communication is the heart of e-commerce and community</p>
</div>

<!--fourth child-->
<div class="row px-3">
<div class="col-md-12">
<!--all the products-->
<div class="row">
 <?php
  if(!isset($_SESSION['username'])){
include('user_login.php');  
	}else{
          include('payment.php');
	}
 ?>
<!--row end-->

</div>
<!--col end-->
</div>

</div>




<!--last child-->
<!--include footer-->
<?php
include("../includes/footer.php")


?>

<!--bootstrap js link-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
</body>
</html>