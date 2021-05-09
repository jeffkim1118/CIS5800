<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted  
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email)){
            //check if the email that user entered is in valid format
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Invalid email format";
            }else{
                //save to database
                $user_id = random_num(20);
                $query = "insert into users (user_id, email, user_name, password) values ('$user_id', '$email', '$user_name', '$password')";

                mysqli_query($con, $query);

                
                header("Location: login.php?register=success");
                die;
            }
        }else{
            echo "Please enter valid information";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Register</title>
</head>

<body>
    <div id="box">
        <div id = "container">
            <form method="post">

                <a style="width:100px; height:100px" href="home.html"><img src = "images/logo_name.png" alt = "appLogo" class = "appLogo_name" style="width:150px; height:150px;"></a>

                <img src = "images/loginpic.jpg" alt = "loginpic" class = "login_pic">

                <div class="top" style="font-size: 20px; margin:none; color:white;"><h1>Sign Up</h1></div>

                <input id="text" type="text" placeholder = "Email" name="email"><br><br>
            
                <input id="text" type="text" placeholder="Username" name="user_name"><br><br>
            
                <input id="text" type="password" placeholder="Password" name="password"><br><br>

                <input id="button" type="submit" value="Register"><br><br>

                <h4 style="margin: 2px; color:white;">Already have an account?</h4><br>
                <a id="link" href="login.php">Login</a><br><br>
            </form>
        </div>
        
    </div>
</body>
</html>