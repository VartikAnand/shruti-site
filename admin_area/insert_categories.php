<?php 
include('../includes/connect.php'); 
if(isset($_POST['insert_cat'])){ 
                                         
    $category_title = $_POST['cat_title'];

//select data from database

$select_query="select * from categories where Category_title= '$category_title'";
$result_select = mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
	
	 echo "<script>alert('This category is already exist');</script>"; 
}else{

    $insert_q = "INSERT INTO categories (Category_title) VALUES ('$category_title')"; 
    $result = mysqli_query($con, $insert_q); 
    if($result){ 
        echo "<script>alert('Category has been inserted successfully');</script>"; 
    } 
}} 

?> 
 <h2 class="text center" style="margin-left:20%;margin-bottom:2%">Insert categories</h2>
<form action="" method="post" class="mb-2"> 
    <div class="input-group w-50 mb-2" style="margin-left:20%"> <!-- Changed width percentage to 100% -->
        <span class="input-group-text " id="basic-addon1"><i class="fa-solid fa-receipt"></i></span> 
        <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Category Title" aria-describedby="basic-addon1"> 
    </div> 
    <div class="input-group w-100 mb-2" style="margin-left:20%"> <!-- Changed width percentage to 100% -->
        <input type="submit" class="bg-dark text-light border-0 p-2 my-3" name="insert_cat" value="Insert Category"> 
    </div> 
</form>
