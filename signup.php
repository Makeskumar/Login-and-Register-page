<?php
include("dbconfig.php");

if (isset($_POST['submit'])) {
    $Username = $_POST["username"];
    $Email = $_POST["Email"];
    $Phone = $_POST["phone"];
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Check if the email already exists in the database
    $checkQuery = "SELECT * FROM signup WHERE Email = '$Email'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<h6 style='color:red;margin-top:10px;'><center>Email already exists in the database. Please choose a different email address.</center></h6>";
      
    } else {
        $query = "INSERT INTO signup (Name, Email, Phone, pass) VALUES ('$Username', '$Email', $Phone, '$pass')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<h6 style='color:green;margin-top:10px;'><center>Data is saved successfully</center></h6>";
            header("location:signin.php");
        } else {
            echo "<h6 style='color:red;margin-top:10px;'><center>Error saving data. Please try again.</center></h6>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    \

        <!-- Sign Up Start -->
        <div class="container">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-5">
                    <div class="bg-light rounded p-2 p-sm-4 my-1 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                           
                            <h3>Sign Up</h3>
                        </div>
                        <form action="signup.php" method="post" >
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Name" name="username"required>
                            <label for="floatingText">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name= "Email"required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" placeholder="Phone" name="phone"required>
                            <label for="floatingInput">Phone no</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" name="confirm-password" required>
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                     
                        <input type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit" value="Sign Up">
                        <p class="text-center mb-0">Already have an Account? <a href="index.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
      

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
