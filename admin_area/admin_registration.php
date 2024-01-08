

<?php include('../includes/connect.php');

include('../functions/common_function.php');
 ?> 




<html>
<head>


<title>Admin Registration</title>

<!--bootstrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<!-- font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>


</style>

</head>
<body>
<div class="container-fluid m-3">

<h2 class="text-center mb-5">Admin Registration</h2>

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

<label for="email" class="form-label">Email</label>

<input type="email" id="email" name="email" placeholder="Enter your email" required="required" class="form-control">

</div>





<div class="form-outline mb-4">

<label for="password" class="form-label">Password</label>

<input type="password" id="password" name="password" placeholder="Enter your password" required="required" class="form-control">

</div>



<div class="form-outline mb-4">

<label for="confirm_password" class="form-label">Confirm Password</label>

<input type="password" id="confirm_password" name="confirm_password" placeholder="Enter your confirm password" required="required" class="form-control">

</div>

<div>

<input type="submit" class="bg-info py-2 px-3 border-0" name="admin_registration" value="Register">
</div>

<p class="small fw-bold mt-2 pt-1">Already have an account?<a href="admin_login.php" class="link-danger">Login</a></p>

</form>



</div>


</div>


</body>

</html>


<!---php code-->


<?php


if (isset($_POST['admin_registration'])) {
    $admin_username = $_POST['username'];
    $admin_email = $_POST['email'];
    $admin_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if username or email already exist
    $select_query = "SELECT * FROM user_table WHERE username='$username' OR admin_email='$email'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);

    if ($rows_count > 0) {
        echo "<script>alert('Username or email already exists')</script>";
    } elseif ($admin_password != $confirm_password) {
        echo "<script>alert('Password do not match')</script>";
    } else {
        // Hash the password
        $hash_password = password_hash($admin_password ,PASSWORD_DEFAULT);

        // Insert data into the database
        $insert_query = "INSERT INTO admin_table (admin_name, admin_email, admin_password)  
                        VALUES ('$admin_username', ' $admin_email ', '$hash_password')";

        $sql_execute = mysqli_query($con, $insert_query);
        if ($sql_execute) {
            echo "<script>alert('Data inserted successfully')</script>";
        } else {
            echo "<script>alert('Error inserting data')</script>";
        }
    }
}
?>

























