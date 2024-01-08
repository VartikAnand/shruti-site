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
<style>
body{
	overflow-x:hidden;
	
}	

body{
	background-image:url('images/blur.png');
	background-repeat: no-repeat;
    background-size:cover;
}
</style>
</head>
<body 


<!--navbar-->
   
       
		

		
	  

    
        <class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#"></a>
        
		


	
 
 
		
		





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





<div class="col-md-2  p-0 text-light" style="margin-top:3%">


<ul class="navbar-nav me-auto text-center">
<li class="nav-item  text-light" style="background-color: rgba(0,0,0,0.5)">
<a href="#" class="nav-link"><h4>Delivery Brands</h4></a>

</li>
<?php

getbrands();



?>
<!--categories to be displayed-->
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


<!--last child-->
<!--include footer-->


<!--bootstrap js link-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
</body>
</html>


