<!--connect file-->


<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();

?>




<!DOCTYPE html>
<html>
<head>
<title>welcome <?php echo $_SESSION['username'] ?></title>
<!--bootstrap CSS link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
<!--font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--css file-->
<link rel="stylesheet" href="../style.css">
<style>
body{
	overflow-x:hidden;
	
}
.profile_img{
	border-radius:50%;
	width:70%;
	height:70%;
	margin:auto;
	display:block;
	object-fit:contain;
	
}
.edit_img{
	width:100px;
	height:100px;
	object-fit:contain;
	
	
}

body{
	background-image:url('../images/k5.jpg');
	background-repeat: no-repeat;
	background-size: 1300px 400px;
}

</style>
</head>
<body>



<!--navbar-->

   
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">








 <!-- <img src="./images/ag.jpg" alt="" class="logo"/>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	  
	  

    
        <!--<li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#"></a>
        
		
		
		

<div class="container" >
<div class="col-md-2  p-0 collpase" >



<button class="btn btn-dark mb-2" data-bs-toggle="collapse" data-bs-target="#clps">
hide/show
</button>
<div class="collapse" id="clps">
<ul class="navbar-nav me-auto text-center">
<li class="nav-item bg-dark text-light">
<a href="#" class="nav-link"><h4>Delivery Brands</h4></a>

</li>
<?php

getbrands();



?>

<div class="col-md-12" >
<ul class="navbar-nav me-auto text-center" >
<li class="nav-item bg-dark text-light">
<a href="#" class="nav-link"><h4>Categories</h4></a>

</li>
<?php

getcategories();


?>
</ul>



</div> 
</div>


</div>
</div>
	  
	</li>--> 
 
 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	



	  
	  
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="display_all.php">Products</a>
        </li>
		<?php
		
		if(isset($_SESSION['username'])){
			
		echo "<li class='nav-item'>
          <a class='nav-link text-light' href='profile.php'>My Account</a>
        </li>";
			
		}else{
			
		echo "<li class='nav-item'>
          <a class='nav-link text-light' href='./user_area/user_registration.php'>Register</a>
        </li>";	
			
			
		}
		
		?>
		
     
       
       <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping" style="color:white"></i><sup style="color:white"><?php cart_item(); ?></sup></a>
        </li>
		
      </ul>
      
      <form class="d-flex" action="../search_product.php" method="get">
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
		
		
		
		   if(!isset($_SESSION['username'])){
			
			echo "<li class='nav-item mx-3'>
          <a class='nav-link text-light' href='#' > Welcome Guest</a>
          </li>";
		  }else{
			
			echo "<li class='nav-item mx-3'>
           <a class='nav-link text-light' href='#'> Welcome ".$_SESSION['username']."</a>
           </li>";
			
		     }
		
		
		
		
		
		
		if(!isset($_SESSION['username'])){
			
			echo "<li class='nav-item mb-5 mx-3'>
          <a class='nav-link w-50 text-light' href='./user_area/user_login.php'>Login</a>
        </li>";
			
		}else{
			
			echo "<li class='nav-item mb-5 mx-3'>
          <a class='nav-link text-light' href='logout.php'>Logout</a>
        </li>";
			
		}
		
		
		
	?>

</ul>


</nav>












<!--third child-->

<!--fourth child-->
<div class="row" style="margin-top:20%">

<div class="col-md-2">

<ul class="navbar-nav  text-center">

 <li class="nav-item">
          <a class="nav-link text-dark"  href="#"><h4>Your Profile</h4></a>
        </li>
		
		
		<?php
		
$username=$_SESSION['username'];
$user_image="Select * from user_table where username='$username'";
$result_image=mysqli_query($con,$user_image);
$row_image=mysqli_fetch_array($result_image);
$user_image=$row_image['user_image'];
echo "  <li class='nav-item'>
          <img src='./user_images/$user_image'  class='profile_img my-2'  alt=''>
        </li>";
		
		?>
		
		
		 
		<li class="nav-item">
          <a class="nav-link text-dark"  href="profile.php">Pending orders</a>
        </li>
		<li class="nav-item">
          <a class="nav-link text-dark"  href="profile.php?edit_account">Edit Account</a>
        </li>
		<li class="nav-item">
          <a class="nav-link text-dark"  href="profile.php?my_orders">My orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark"  href="profile.php?delete_account">Delete Account</a>
        </li>      
          <li class="nav-item">
          <a class="nav-link text-dark"  href="logout.php">Logout</a>
        </li>

</ul>

</div>
<div class="col-md-10">
 
<?php  get_user_order_details();
  if(isset($_GET['edit_account'])){
	  include('edit_account.php');
	  
  }

   if(isset($_GET['my_orders'])){
	  include('user_orders.php');
	  
  }
  
  if(isset($_GET['delete_account'])){
	  include('delete_account.php');
	  
  }
  
  

?>

   
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