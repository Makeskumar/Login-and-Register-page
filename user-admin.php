<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin landing</title>
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
    }
        </style>
</head>
<body>
    <div>
    <h1>Welcome YOU Admin</h1>
    </div>
</body>
</html>