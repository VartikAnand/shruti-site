


<?php include('../includes/connect.php');

include('../functions/common_function.php');
?>



<html>
<head>
<!--bootstrap CSS link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<title>Document</title><head>


</head>
<style>

.payment_img{
	
	margin:auto;
	display:block;
}

</style>
<body>

<!--php code to access user id-->
<?php

$user_ip=getIPAddress();
$get_user="Select * from user_table where user_ip='$user_ip'";
$result=mysqli_query($con,$get_user);
$run_query=mysqli_fetch_array($result);
$user_id=$run_query['user_id'];



?>
<div class="container">
    <h2 class="text-center text-info my-4">Payment Options</h2>
	<div class="row d-flex justify-content-center align-items-center my-5">
	<div class=col-md-6>
	
	  <a href="https://www.paytm.com" target="_blank"><img src="../images/py.png"  alt="" class="payment_img"></a>
	
	</div>
	<div class=col-md-6>
	
	  <a href="order.php?user_id=<?php echo $user_id?>"
	  <h2 class="text-center" >Pay Offline</h2></a>
	
	</div>
	
	  
	
	</div>
	
 </div>


</body>
</html>