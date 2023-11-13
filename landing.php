<?php 
include("dbconfig.php");
session_start();
$email=$_SESSION["Email"];
$query ="SELECT * FROM  signup WHERE Email ='$email'";
$result=mysqli_query($conn, $query);
while($row =mysqli_fetch_assoc($result)){
$name=$row['Name'];
$email=$row['Email'];
$phone=$row['Phone'];
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            background-image: url("landing.gif");
            background-size: cover;
          background-repeat: no-repeat;
          color: white;
          background-position: bottom center;
         
        }
        body{
            height: 100vh;
            box-sizing: border-box;
        }
        p{
            margin-left: 20px;
            background: transparent;
        }
        h1{
            text-align:center ;
            background: transparent;
        }
        div{
            position: absolute;
            top: 30%;
        }
       @media screen and (min-width:768px) {
        div{
            display: flex;
            flex-direction: column;
padding: 30px;
            position: absolute;
            top: 35%;
            left:35%;    
            justify-content: center;
            align-items: start;
           

        }
        p{
        margin-left: 40px;
       
        }
       }
    </style>
</head>
<body>
    <div>
    <h1 >Welcome <?php echo $name; ?> to our website</h1>
      <p>Name : <?php echo $name; ?></p>
      <p>Email :<?php echo $email; ?> </p>
      <p>Phone : <?php echo $phone; ?></p>
    


    </div>
        
</body>
</html>