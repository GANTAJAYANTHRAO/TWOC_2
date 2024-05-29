<?php
session_start();
include("db.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fullname = $_POST['fullname'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if (!empty($email) && !empty($password) && !is_numeric($email) && $password == $repeat_password) {
        $query = "INSERT INTO form (fullname, city, email, password) VALUES ('$fullname' , '$city' , '$email' , '$password')";
        mysqli_query($con, $query);
        echo "<script type='text/javascript'> alert('Successfully Register') </script>";
        header("location:  https://gantajayanthrao.github.io/TWOC_3/");
        exit;
    } else {
        echo "<script type='text/javascript'> alert('Please Enter some valid Information') </script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <style>
        .img {
            width: 175px;
            height: 100px;
            border-radius: 50%;
            margin-left: 560px;

        }

        @media screen and (min-width: 600px) and (max-width: 768px) {

            .img {
                width: 175px;
                height: 100px;
                border-radius: 50%;
                margin-left: 240px;
                margin-top: 2.5em;
            }

        }


        @media screen and (min-width: 400px) and (max-width: 600px) {

            .img {
                width: 175px;
                height: 100px;
                border-radius: 50%;
                margin-left: 80px;
                margin-top: 2.5em;
            }

        }


        @media screen and (min-width: 250px) and (max-width: 400px) {

            .img {
                width: 175px;
                height: 100px;
                border-radius: 50%;
                margin-left: 55px;
                margin-top: 2.5em;
            }

        }
    </style>


</head>


<body class="body">

    <img class="img" src="T.W.O.C_LOGO.png">

    <div class="container">

        <h1 class="h1">SIGN UP</h1>

        <form action="signup.php" method="post">

            <div class="form-group">
                <!-- form-control is bootstrap function -->
                <input type="text" class="form-control" name="fullname" placeholder="fullname">
            </div>


            <div class="form-group">
                <!-- form-control is bootstrap function -->
                <input type="text" class="form-control" name="city" placeholder="city">
            </div>


            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password">
            </div>

            <div href="intro.html"  class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>


        </form>

        <br>


        <p class="p">Already have an account? <a href="login.php">Login Here</a> </p>

    </div>


</body>



</html>



