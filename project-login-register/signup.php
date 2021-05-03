<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted  
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);


            header("Location: login.php");
            die;

        }else{
            echo "please enter valid information!";
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
        <form method="post">
            <div style="font-size: 20px; margin: 10px; color:white;">Sign Up</div>
            
            <input id="text" type="text" placeholder="Username" name="user_name"><br><br>
            
            <input id="text" type="password" placeholder="Password" name="password"><br><br>

            <input id="button" type="submit" value="Register"><br><br>

            <label>Already have an account?</label><br>
            <a id="link" href="login.php">Login</a><br><br>
        </form>
    </div>
</body>
</html>