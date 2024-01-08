
<?php



if(isset($_GET['delete_list_orders'])){
	
	
	$delete_orders=$_GET['delete_list_orders'];
	//echo $delete_category;
	
	$delete_query="Delete from user_orders where user_id=$delete_orders";
	$result=mysqli_query($con,$delete_query);
	if($result){
		
		echo "<script>alert('Order is been deleted successfully')</script>";
		
		echo "<script>window.open('./index.php?list_orders','_self')</script>";
		
		
		
	}
	
}




?>