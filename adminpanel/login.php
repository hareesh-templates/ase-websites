<!DOCTYPE html>
<head>
    <title>Eswari Group Admin Panel || Login Page</title>
    <link rel="shortcut icon" href="../imgs/icons/EG_Logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            background-image: url("../imgs/sliderImage3.jpg");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        form {
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        
        .submit {
            float: right;
            
        }
  </style>
</head>


<body>
    <form action="./php/login.php" method="post">
        <input type="email" name="email" placeholder="Enter your Email" />
        <input type="password" name="password" placeholder="Enter your password"    /><br>
        <input type="submit" name="submit" value="Submit" class="submit" />
    </form>
</body>

</html>