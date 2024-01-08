

<h3 class="text-center text-success">All Orders</h3>

<table class="table table-bordered mt-5">

<thead class="bg-info">


<?php


$get_payments="Select * from user_payments";
$result=mysqli_query($con,$get_payments);
$row_count=mysqli_num_rows($result);



if($row_count==0){
	
	echo "<h2 class='bg-danger text-center mt-5'>No payment recieved yet</h2>";
	
}else{
	echo "<tr>
       <th> S1 no</th>
	   <th>Invoice number</th>
	   <th>Due Amount</th>
	 
	   <th>Payment Mode</th>
	
	  <th>delete</th>
</tr>
</thead>";

	
	$number=0;
	while($row_data=mysqli_fetch_assoc($result)){
		
		$order_id=$row_data['order_id'];
		
		$payment_id=$row_data['payment_id'];
		
		$amount=$row_data['amount'];
		$invoice_number=$row_data['invoice_number'];
		$payment_mode=$row_data['payment_mode'];
	
		
		$number++;
		echo "
<tbody class='bg-secondary text-light'>
     <tr>
	       <td>$number</td>
	       <td>$invoice_number</td>
	       <td>$amount</td>
	       <td>$payment_mode</td>
	     
	      
	       <td><a href='index.php?delete_list_payments' class='text-dark'><i class='fa-solid fa-solid fa-trash'></i></a></td>
	 
             

     </tr>";
	}
}





?>
</tbody>

</table>