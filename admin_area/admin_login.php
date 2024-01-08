

<?php include('../includes/connect.php');

include('../functions/common_function.php');

@session_start();


 ?> 




<html>
<head>


<title>Admin Registration</title>

<!--bootstrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<!-- font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

body{
	
	overflow: hidden;
}


</style>

</head>
<body>
<div class="container-fluid m-3">

<h2 class="text-center mb-5">Admin Login</h2>

<div class="row d-flex justify-content-center">

<div class="col-lg-6 col-xl-5">
<img src="../images/admin1.png"  alt="Admin Registration">

</div>


<div class="col-lg-6 col-xl-5">
<form action="" method="post">
<div class="form-outline mb-4">

<label for="username" class="form-label">Username</label>

<input type="text" id="username" name="username" placeholder="Enter your username" required="required" class="form-control">

</div>


</form>



<div class="form-outline mb-4">

<label for="password" class="form-label">Password</label>

<input type="password" id="password" name="password" placeholder="Enter your password" required="required" class="form-control">

</div>



<div>

<input type="submit" class="bg-info py-2 px-3 border-0" name="user_login" value="Login">
</div>

<p class="small fw-bold mt-2 pt-1">Don't have an account?<a href="admin_registration.php" class="link-danger">Register</a></p>

</form>



</div>


</div>


</body>

</html>



<?php


if(isset($_POST['user_login'])){
	
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 $select_query="Select * from user_table where username='$user_username'";
	$result=mysqli_query($con,$select_query);
	$row_count=mysqli_num_rows($result);
	$row_data=mysqli_fetch_assoc($result);
	

	if($row_count>0){
	$_SESSION['username']=$username;
    
		if(password_verify($password,$row_data['password'])){
		//echo "<script>alert('Login successfully')</script>";
		
		if($row_count==1){
		  $_SESSION['username']=$username;
		  echo "<script>alert('Login successfully')</script>";
          echo "<script>window.open('index.php','_self')</script>";	
          		  
		}
		
			
		else{
			echo "<script>alert('Invalid credentials')</script>";
		
		}
	}else{
		
		echo "<script>alert('Invalid credentials')</script>";
		
	}
}

}



?>









