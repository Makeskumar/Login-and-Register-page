<?php include("dbconfig.php");
session_start();


if(isset($_POST["submit"])){
    $_SESSION["Email"]=$_POST["Email"];

    $username=$_POST["Email"];
    $pass=$_POST["pass"];
    if($username=="admin@gmail.com" && $pass="admin1"){
        header("Location:user-admin.php");
    }
else{
    $query="SELECT * FROM signup WHERE Email='$username'";
  
    $result=mysqli_query($conn,$query);

    while($row =mysqli_fetch_assoc($result)){
       
    if(password_verify($pass,$row['pass'])){
        $username=$_POST["Email"];
header("Location:landing.php");

        
    }
      else{
       echo "<h6 style='color:red;margin-top:10px;'><center>UserName and password are invalid</center></h6>";
      }  
    
        }

    }
}
        




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign IN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</head>

<body>


        <!-- Sign In Start -->
        <div class="container ">
            <div class="row h-100 align-items-center justify-content-center " style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-5">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            
                            <h3>Sign In</h3>
                        </div>
                        <form action="index.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="Email" placeholder="name@example.com"required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password"required>
                            <label for="floatingPassword">Password</label>
                        </div>  
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            
                            <a href="forget.php">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">Sign In</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
     

    <!-- JavaScript Libraries -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>

</html>