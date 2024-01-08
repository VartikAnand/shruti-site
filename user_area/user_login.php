

<?php include('../includes/connect.php');

include('../functions/common_function.php');

@session_start();


 ?> 




<html>


<title>user login</title>
<!--bootstrap CSS link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  

<style>
body{
	overflow-x:hidden;
	
}

</style>

<body>
<div class="container-fluid m-3">
   <h2 class="text-center">User login</h2>
   <div class="row d-flex align-items-center justify-content-center">
      <div class="col-lg-12 col-xl-6">
      <form action="" method="post" enctype="multipart/form-data">
	 	 
		 
<!--username field -->
		 <div class="form-outline mb-4">
         <label for="user_username" class="form-label">Username</label>
		  <input type="text"  id="user_username" class="form-control" placeholder="enter your username" 
		     autocomplete="off" required="required" name="user_username"/>
		  
		 
		 </div>
	  
	

  

<!--password field -->
	
	  	 <div class="form-outline mb-4">

         <label for="user_password" class="form-label">Password</label>
		  <input type="password"  id="user_password" class="form-control" placeholder="enter your password" 
		     autocomplete="off" required="required" name="user_password"/>
		  
		 
		 </div>




	 

	  
	  
	  <div class=" mt-4 pt-2">
	      <input type="submit" value="Login" class="bg-dark text-light py-2 px-3 border-0" name="user_login">
	     <p class="small fw-bold mt-2 pt-1">Dont have an account ? <a href="user_registration.php"
		 class= "text-danger">Register</a></p>
	  



	 
	  </form>
	  </div>
</div>


</body>

</html>




<?php


if(isset($_POST['user_login'])){
	
 $user_username=$_POST['user_username'];
 $user_password=$_POST['user_password'];
 
 $select_query="Select * from user_table where username='$user_username'";
	$result=mysqli_query($con,$select_query);
	$row_count=mysqli_num_rows($result);
	$row_data=mysqli_fetch_assoc($result);
	$user_ip=getIPAddress();
	
	
	//cart items
$select_query_cart="Select * from cart_details where ip_address='$user_ip'";
	
$select__cart=mysqli_query($con,$select_query_cart);
	if($row_count>0){
	$_SESSION['username']=$user_username;
    $row_count_cart=mysqli_num_rows($select__cart); 
		if(password_verify($user_password,$row_data['user_password'])){
		//echo "<script>alert('Login successfully')</script>";
		
		if($row_count==1 and  $row_count_cart==0 ){
		  $_SESSION['username']=$user_username;
		  echo "<script>alert('Login successfully')</script>";
          echo "<script>window.open('profile.php','_self')</script>";	
          		  
		}else{
			$_SESSION['username']=$user_username;
			echo "<script>alert('Login successfully')</script>";
          echo "<script>window.open('payment.php','_self')</script>";	
			
		}
		
			
		}else{
			echo "<script>alert('Invalid credentials')</script>";
		
		}
	}else{
		
		echo "<script>alert('Invalid credentials')</script>";
		
	}
}




?>
















