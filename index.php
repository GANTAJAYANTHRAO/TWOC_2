<?php

include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAGE_1</title>
    <!-- Link to your custom style.css file -->
    <link rel="stylesheet" href="style.css">
    <!-- Link to Bootstrap CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .img {
            width: 175px;
            height: 100px;
            border-radius: 50%;
            margin-left: 560px;
            margin-top: 2.5em;
        }
        .h1 {
            color: white;
        }
        .buttons {
            display: flex;
            flex-direction: row;
            gap: 200px;
            margin-left: 427px;
        }
        .button {
            width: 120px;
            height: 60px;
            border-radius: 10px;
            color: black;
            background-color: white;
            text-align: center;
            padding-top: 13px;
            font-size: x-large;
            text-decoration: none;
            font-weight: 700;
        }
        @media screen and (min-width: 600px) and (max-width: 768px) {
            .img {
                width: 175px;
                height: 100px;
                border-radius: 50%;
                margin-left: 240px;
                margin-top: 2.5em;
            }
            .h1 {
                color: white;
            }
            .buttons {
                display: flex;
                flex-direction: row;
                gap: 200px;
                margin-left: 115px;
            }
            .button {
                width: 120px;
                height: 60px;
                border-radius: 10px;
                color: black;
                background-color: white;
                text-align: center;
                padding-top: 13px;
                font-size: x-large;
                font-weight: 700;
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
            .h1 {
                font-size: large;
                color: white;
                margin-left: 10px;
                margin-top: 10px;
            }
            .buttons {
                display: flex;
                flex-direction: row;
                gap: 50px;
                margin-left: 15px;
            }
            .button {
                width: 120px;
                height: 40px;
                border-radius: 10px;
                color: black;
                background-color: white;
                text-align: center;
                padding-top: 3.5px;
                font-size: x-large;
                font-weight: 500;
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
            .h1 {
                font-size: large;
                color: white;
                margin-left: 10px;
                margin-top: 10px;
            }
            .buttons {
                display: flex;
                flex-direction: row;
                gap: 50px;
                margin-left: 0px;
            }
            .button {
                width: 120px;
                height: 40px;
                border-radius: 10px;
                color: black;
                background-color: white;
                text-align: center;
                padding-top: 3.5px;
                font-size: x-large;
                font-weight: 500;
            }
        }
    </style>
</head>
<body class="body">
    <div class="entry_page">
        <img class="img" src="T.W.O.C_LOGO.png">
        <br>
        <h1 class="h1">THE WORLD OF CODE</h1>
        <br>
        <div class="buttons">
            <a href="signup.php" class="button">SIGNUP</a>
            <a href="login.php" class="button">LOGIN</a>
        </div>
    </div>
</body>
</html>
