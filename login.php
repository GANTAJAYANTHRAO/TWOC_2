<?php

    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email) && $password == $password){
            $query = "select * from form where email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if($result){
                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);
                    // Check if the password matches
                    if ($user_data['password'] == $password) {
                        // Set session variable to indicate logged in
                        $_SESSION['email'] = $email;
                        // Redirect to index.php
                        header("location:  https://gantajayanthrao.github.io/TWOC_3/");
                        // Make sure to exit after redirection
                        exit;
                    }
                }
                
            }

            echo "<script type='text/javascript'> alert('wrong username or passowrd') </script>";
        }

        else{

            echo "<script type='text/javascript'> alert('successfully login') </script>";
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    
    <style>
         .img {
            width: 175px;
            height: 100px;
            border-radius: 50%;
            margin-left: 560px;
           
        }
    </style>


</head>


<body class="body">

    <img class="img" src="T.W.O.C_LOGO.png">

    <div class="container">

        <h1 class="h1">LOGIN</h1>

        <form action="login.php" method="post">


            

            
            <div class="form-group">
                <input type="text" class="form-control"  name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control"  name="password" placeholder="Password">
            </div>


            <div  class="form-btn">
                <a href="intro.html">
                <input type="submit" class="btn btn-primary" value="Login" name="submit">
                </a>
            </div>


        </form>

        <br>


        <p class="p">Not have an account? <a href="signup.php"> Sign Up </a> </p>

    </div>

    
</body>



</html>


