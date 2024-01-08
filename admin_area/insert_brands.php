<?php 
include('../includes/connect.php'); 
if(isset($_POST['insert_brand'])){ 
                                         
    $brand_title= $_POST['brand_title'];

//select data from database

$select_query="select * from  brands where brand_title= '$brand_title'";
$result_select = mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
	
	 echo "<script>alert('This brand is already exist');</script>"; 
}else{

    $insert_q = "INSERT INTO brands (brand_title) VALUES ('$brand_title')"; 
    $result = mysqli_query($con, $insert_q); 
    if($result){ 
        echo "<script>alert('barnd has been inserted successfully');</script>"; 
    } 
}} 

?>





<form action="" method="post" class="mb-2"> 
    <div class="input-group w-50 mb-2" style="margin-left:20%"> <!-- Changed width percentage to 100% -->
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span> 
        <input type="text" class="form-control" name="brand_title" placeholder="Insert brands" aria-label="brands" aria-describedby="basic-addon1"> 
    </div> 
    <div class="input-group w-100 mb-2" style="margin-left:20%"> <!-- Changed width percentage to 100% -->
        <input type="submit" class="bg-dark text-light border-0 p-2 my-3" name="insert_brand" value="Insert brands"> 
    </div> 
</form>
