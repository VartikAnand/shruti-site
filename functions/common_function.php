<?php
//include connect file
//include('./includes/connect.php');

//geting products
function getproducts()
{
  global $con;

  if (!isset($_GET['category'])) {
    if (!isset($_GET['brand'])) {
      $select_query = "SELECT * FROM products order by rand() LIMIT 0,9";
      $result_query = mysqli_query($con, $select_query);
      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        $product_price = $row['product_price'];



        echo " 
       
		 <div
          class='container cursor-pointer'
          style='--dynamic-bg-color: #efefef;margin:auto;width:300px;margin-bottom:5%;margin-left:10%'>
          <div class='card' style='content: 'AS'; --dynamic-bg-color: #efefef>
		    
			<div class='imgBx'>
              <img src='./admin_area/product_images/$product_image1' alt='$product_title' />
            </div>
		      
			  <div class='contentBx'>
             
			 <h2 class='text-3xl text-dark'>$product_title</h2>
		     
			 <div class='size font-normal text-sm text-start text-dark'>
                <p>$product_description</p>
              </div>

		     <div class='color mb-8 mt-5 text-lg text-dark font-medium'>
                <h3 class='text-dark'>$product_price/-</h3>
      
		  
              <a class='text-base mr-2' href='index.php?add_to_cart= $product_id'>Add to Cart</a>
           
           
		                    </div>
                </div>
              </div>
			  </div>
		    
			
			  ";
      }
    }
  }
}




//getting unique brands
function get_unique_brands()
{
  global $con;

  if (isset($_GET['brand'])) {
    $brand_id = $_GET['brand'];

    $select_query = "SELECT * FROM products WHERE brand_id=$brand_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>this brand not available for service</h2>";
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_image1 = $row['product_image1'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];
      $product_price = $row['product_price'];

      echo $product_title;

      echo "<div class='col-md-4 mb-2'>
            <div class='card' >
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
				<p class='card-text'>Price: $product_price/-</p>
                   <a href='index.php?add_to_cart= $product_id' class='btn btn-info'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
              </div>
            </div>
          </div>";
    }
  }
}

//get all products
function get_all_products()
{

  global $con;

  if (!isset($_GET['category'])) {
    if (!isset($_GET['brand'])) {
      $select_query = "SELECT * FROM products order by rand()";
      $result_query = mysqli_query($con, $select_query);
      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        $product_price = $row['product_price'];



        echo "<div class='col-md-4 mb-2'>
                <div class='card' >
                  <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                  <p class='card-text'>Price: $product_price/-</p>
					
					<a href='index.php?add_to_cart= $product_id' class='btn btn-info'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                  </div>
                </div>
              </div>";
      }
    }
  }
}











//getting unique categories
function get_unique_categories()
{
  global $con;

  if (isset($_GET['category'])) {
    $category_id = $_GET['category'];

    $select_query = "SELECT * FROM products WHERE category_id= $category_id";
    $result_query = mysqli_query($con, $select_query);
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No category for this category</h2>";
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_image1 = $row['product_image1'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];
      $product_price = $row['product_price'];

      echo $product_title;

      echo "<div class='col-md-4 mb-2'>
            <div class='card' >
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
				    <a href='index.php?add_to_cart= $product_id' class='btn btn-info'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
				
              </div>
            </div>
          </div>";
    }
  }
}




//displaying brands in sidenav
function getBrands()
{
  global $con;
  $imagePathsBrands = array(
    5 => "./images/apsara.jpg",
    4 => "./images/doms1.jpg",
    6 => "./images/parker.jpg",
    7 => "./images/cello.jpg",
    8 => "./images/classmate.jpg",
    9 => "./images/camlin4.jpg",
    10 => "./images/fc.jpg"
  );

  $select_brands = "SELECT * FROM brands";
  $result_brands = mysqli_query($con, $select_brands);

  while ($row_data = mysqli_fetch_assoc($result_brands)) {
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];

    // Check if the brand ID exists in the image paths array
    if (array_key_exists($brand_id, $imagePathsBrands)) {
      $imagePath = $imagePathsBrands[$brand_id];
      echo "<div style='display: inline-block; text-align: center; margin-right: 20px; cursor: pointer;'>
              <img src='$imagePath' class='logo' style='width: 80px; height: 80px; border-radius: 50%;' />
              <a href='index.php?brand=$brand_id' class='nav-link'>$brand_title</a>
            </div>";
    }
  }
}

//displaying categories in sidenav
function getcategories()
{


  $imagePaths = array(
    10 => "./images/high.jpg",
    2 => "./images/stickynotes.jpg",
    8 => "./images/notebook.jpg",
    7 => "./images/dfd.jpg",
    5 => "./images/file.jpg",
    11 => "./images/paint.jpg",
    13 => "./images/pencilart.jpg"
  );
  global $con;
  $select_categories = "SELECT * FROM categories";
  $result_categories = mysqli_query($con, $select_categories);

  while ($row_data = mysqli_fetch_assoc($result_categories)) {
    $Category_title = $row_data['Category_title'];
    $category_id = $row_data['category_id'];
    if (array_key_exists($category_id, $imagePaths)) {
      $imagePath = $imagePaths[$category_id];
      echo "<div onclick='openCategory($category_id)' style='display: inline-block; text-align: center; margin-right: 20px; cursor: pointer;'>
                <img src='$imagePath' class='logo' style='width: 100px; height: 100px; border-radius: 50%;' />
                <p>$Category_title</p>
              </div>";
    }
  }
}


// searching produts functions


function search_products()
{
  global $con;
  if (isset($_GET['search_data_product'])) {
    $search_data_value = $_GET['search_data'];
    $search_query = "Select * from products where product_keywords like '%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);

    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No result match</h2>";
    }





    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_image1 = $row['product_image1'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];
      $product_price = $row['product_price'];



      echo " 
       
		 <div
          class='container cursor-pointer'
          style='--dynamic-bg-color: #efefef;margin:auto;width:300px;margin-bottom:5%;margin-left:10%'>
          <div class='card' style='content: 'AS'; --dynamic-bg-color: #efefef>
		    
			<div class='imgBx'>
              <img src='./admin_area/product_images/$product_image1' alt='$product_title' />
            </div>
		      
			  <div class='contentBx'>
             
			 <h2 class='text-3xl text-dark'>$product_title</h2>
		     
			 <div class='size font-normal text-sm text-start text-dark'>
                <p>$product_description</p>
              </div>

		     <div class='color mb-8 mt-5 text-lg text-dark font-medium'>
                <h3 class='text-dark'>$product_price/-</h3>
      
		  
              <a class='text-base mr-2' href='index.php?add_to_cart= $product_id'>Add to Cart</a>
           
           
		                    </div>
                </div>
              </div>
			  </div>
		    
			
			  ";
    }
  }
}



//view details function

function view_details()
{

  global $con;
  if (isset($_GET['product_id'])) {
    if (!isset($_GET['category'])) {
      if (!isset($_GET['brand'])) {

        $product_id = $_GET['product_id'];
        $select_query = "SELECT * FROM products where product_id=$product_id";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
          $product_id = $row['product_id'];
          $product_title = $row['product_title'];
          $product_description = $row['product_description'];
          $product_image1 = $row['product_image1'];
          $product_image2 = $row['product_image2'];
          $product_image3 = $row['product_image3'];

          $category_id = $row['category_id'];
          $brand_id = $row['brand_id'];
          $product_price = $row['product_price'];



          echo "<div class='col-md-4 mb-2'>
                <div class='card' >
                  <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
					<p class='card-text'>Price: $product_price/-</p>
                   <a href='index.php?add_to_cart= $product_id' class='btn btn-info'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                  </div>
                </div>
              </div>
			  
			  

 <div class='col-md-8'>
  <div class='row'>
  <div class='col-md-12'>
    <h4 class='text-center text-info mb-5'>Related products</h4>
  
  
  </div>
  <div class='col-md-6'>
  <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
  
  </div>
  
  
  <div class=<'col-md-6'>
  <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='$product_title'>
  
  </div>
  
</div>

</div>";
        }
      }
    }
  }
}

//Get IP address function 
function getIPAddress()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) && filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

// Cart function 
function cart()
{
  global $con;

  if (isset($_GET['add_to_cart'])) {
    $get_ip_add = getIPAddress();
    $get_product_id = $_GET['add_to_cart'];

    $select_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_add' AND product_id=$get_product_id";
    $result_query = mysqli_query($con, $select_query);

    $num_of_rows = mysqli_num_rows($result_query);

    if ($num_of_rows > 0) {
      echo "<script>alert('This item already exists')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    } else {
      $insert_query = "INSERT INTO cart_details(product_id,ip_address,quantity) VALUES ($get_product_id, '$get_ip_add', 0)";
      $result_query = mysqli_query($con, $insert_query);
      echo "<script>alert('Item is added to cart')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
  }
}

// Function to get cart items count
function cart_item()
{
  global $con;
  $get_ip_add = getIPAddress();

  $select_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_add'";
  $result_query = mysqli_query($con, $select_query);
  $count_cart_items = mysqli_num_rows($result_query);

  echo $count_cart_items;
}

function total_cart_price()
{
  global $con;
  $get_ip_add = getIPAddress();
  $total_price = 0;

  $cart_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_add'";
  $result = mysqli_query($con, $cart_query);

  while ($row = mysqli_fetch_array($result)) {
    $product_id = $row['product_id'];
    $product_quantity = $row['quantity'];

    $select_product_price = "SELECT product_price FROM products WHERE product_id='$product_id'";
    $result_product_price = mysqli_query($con, $select_product_price);

    if ($row_product_price = mysqli_fetch_array($result_product_price)) {
      $product_price = $row_product_price['product_price'];
      $product_total_price = $product_price * $product_quantity;
      $total_price += $product_total_price;
    }
  }

  echo $total_price;
}


// get user order details

function get_user_order_details()
{
  global $con;
  $username = $_SESSION['username'];
  $get_details = "Select * from user_table where username='$username'";
  $result_query = mysqli_query($con, $get_details);
  while ($row_query = mysqli_fetch_array($result_query)) {
    $user_id = $row_query['user_id'];
    if (!isset($_GET['edit_account'])) {
      if (!isset($_GET['my_orders'])) {
        if (!isset($_GET['delete_account'])) {
          $get_orders = "Select * from user_orders where user_id=$user_id and order_status='pending'";
          $result_orders_query = mysqli_query($con, $get_orders);
          $row_count = mysqli_num_rows($result_orders_query);
          if ($row_count > 0) {
            echo "<h3 class='text-center  text-success my-5 mb-2'>You have <span class='text-danger'>$row_count</span>  pending orders</h3>
			<p  class='text-center'><a href='profile.php?my_orders' class='text-dark'>Order Details</a></p>";
          } else {


            echo "<h3 class='text-center  text-success my-5 mb-2'>You have zero pending orders</h3>
			<p  class='text-center'>	<a href='../index.php' class='text-dark'>Explore Products</a></p>";
          }
        }
      }
    }
  }
}
