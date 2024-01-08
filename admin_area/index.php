

<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();

?>



<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<!--bootstrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<!-- font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- css file-->

<link rel="stylesheet" href="../style.css">
<style>
.admin_image{
	border-radius:50%;
	width:100px;
	object-fit: contain;
	}
.footer{
	position:absolute;
	bottom:0;
}
body{
	
	overflow-x:hidden;
	
}

.product_image{
	
	width:10%;
	
	
}
</style>
</head>

<!--navbar-->
<!-- first child-->
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
<div class="container-fluid">
<img src="../images/ag.jpg" alt="" class="logo" style="border-radius:50%">
<nav class="navbar navbar-expand-lg">
<ul class="navbar-nav">
 <li class="nav-item" >
 <a href="" class="nav-link text-light" style="font-family: 'Comfortaa', sans-serif">Welcome</a>
 </li>



</ul>

</nav>


</nav>
<!--second child-->

<div class="bg-light">
<h3 class="text-center p-2" style="margin-top:5%;font-family:Serif">Manage Details</h3>
</div>

<!--third child -->

<div class="row">
<div class="col-md-12 p-1 d-flex align-items-center">
<div class="px-5">
<a href="#"><img src="../images/adminb.jpg" alt="" class="admin_image" style="margin-left:-5%"></a>
<p class="text-dark text-center mt-2" style="font-family:Serif" >Admin </p> 

</div>

<div class="button text-center" style="font-family:'Comfortaa', sans-serif;">
<button style="margin-left:-40px"><a href="insert_product.php" class="nav-link text-light  bg-dark"  >Insert products</a></button>
<button style="margin-left:15px" ><a href="index.php?view_products" class="nav-link text-light bg-dark">View products</a></button>
<button style="margin-left:15px"><a href="index.php?insert_category" class="nav-link text-light bg-dark ">Insert categories</a></button>
<button style="margin-left:15px"><a href="index.php?view_categories" class="nav-link text-light bg-dark ">View categories</a></button>
<button style="margin-left:15px"><a href="index.php?insert_brand" class="nav-link text-light bg-dark">Insert brands</a></button>
<button style="margin-left:15px"><a href="index.php?view_brands" class="nav-link text-light bg-dark ">view brands</a></button>
<button style="margin-left:15px"><a href="index.php?list_orders" class="nav-link text-light bg-dark">All orders</a></button>
<button style="margin-left:15px"><a href="index.php?list_payments" class="nav-link text-light bg-dark">All payments</a></button>
<button style="margin-left:15px"><a href="index.php?list_users" class="nav-link text-light bg-dark">list users</a></button>
<button style="margin-left:7px"><a href="" class="nav-link text-light bg-dark">Logout</a></button>



 


</div>

</div>


<!-- fourth child -->
<div class="container my-3">
<?php 
if(isset($_GET['insert_category'])){
	include('insert_categories.php');
	
}
if(isset($_GET['insert_brand'])){
	include('insert_brands.php');
	
}

if(isset($_GET['view_products'])){
	include('view_products.php');
	
}

if(isset($_GET['edit_products'])){
	include('edit_products.php');
	
}

if(isset($_GET['delete_product'])){
	include('delete_product.php');
	
}

if(isset($_GET['view_categories'])){
	include('view_categories.php');
	
}

if(isset($_GET['view_brands'])){
	include('view_brands.php');
	
}

if(isset($_GET['edit_categories'])){
	include('edit_categories.php');
	
}


if(isset($_GET['edit_brands'])){
	include('edit_brands.php');
	
}


if(isset($_GET['delete_categories'])){
	include('delete_categories.php');
	
}

if(isset($_GET['delete_brands'])){
	include('delete_brands.php');
	
}


if(isset($_GET['list_orders'])){
	include('list_orders.php');
	
}

if(isset($_GET['delete_list_orders'])){
	include('delete_list_orders.php');
	
}


if(isset($_GET['list_payments'])){
	include('list_payments.php');
	
}



if(isset($_GET['delete_list_payments'])){
	include('delete_list_payments.php');
	
}



if(isset($_GET['list_users'])){
	include('list_users.php');
	
}


?>
</div>





  </div>


</div>

<body>



<!-- bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>



</html>