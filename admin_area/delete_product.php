<?php

if(isset($_GET['delete_product'])){
	
	$delete_id=$_GET['delete_product'];
	echo $delete_id;
	
	
	
	
 $delete_products="Delete from products where product_id=$delete_id";
 $result_products=mysqli_query($con,$delete_products);
 if($result_products){
	 
	   	echo"<script>alert('Product deleted succesfully')</script>";
	    echo"<script>window.open('./index.php','_self')</script>";
	 
 }
 
 
 
}





?>