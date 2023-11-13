<?php 
include("dbconfig.php");
session_start();
$forgetemail=$_SESSION["Email"];
if(isset($_POST["forget"])){
    $forgetemail=$_POST["forgetemail"];
    $newpass = password_hash($_POST["Newpassword"], PASSWORD_DEFAULT);
   $query="UPDATE signup SET pass='$newpass' WHERE email='$forgetemail'";
   $result = mysqli_query($conn, $query);
   echo $result;
if($result){
    echo "<h6 style='color:green;margin-top:10px;'><center> Forget Password is Updated successfully</center></h6>";
    header("Location:landing.php");
}
else{
    echo "<h6 style='color:red;margin-top:10px;'><center>Forget Password is not Updated</center></h6>";
    
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</head>

<body>


        <!-- Sign In Start -->
        <div class="container ">
            <div class="row h-100 align-items-center justify-content-center " style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-5">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            
                            <h3>Forget Password</h3>
                        </div>
                        <form action="forget.php" method="post">
                        <div class="form-floating mb-3">
                        <input type="email" placeholder="Email" class="form-control" name="forgetemail" value="<?php echo $forgetemail; ?>" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                           
<input type="password" placeholder="Password" class="form-control" name="Newpassword" >
       <label for="floatingPassword">Password</label>
                        </div>  
                       
                        <input type="submit" class="btn btn-primary py-3 w-100 mb-4"value="Updated Password" name="forget">

                        </form>
                    </div>
                </div>
            </div>
            
        </div>
     

    <!-- JavaScript Libraries -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>
</html>