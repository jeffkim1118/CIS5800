<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted  
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //Read from database
            $query = "select * from users where user_name = '$user_name' limit 1";

            $result = mysqli_query($con, $query);

            //Check
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['user_name'] == $user_name && $user_data['password'] == $password){
                        if(!empty($_POST["remember"])){
                            setcookie("user_name", $_POST["user_name"],time()+ (10*365*24*60*60));
                            setcookie("password", $_POST["password"],time()+ (10*365*24*60*60));

                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("Location: index.php");
                            die;

                        }else{
                            setcookie ("user_name","");
                            setcookie ("password", "");

                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("Location: index.php");
                            die;
                        }
                    }
                }
            }

            echo "<p style='color:red; font-size: 20px; width:fit-content; height: 30px; margin:auto ; 
            background-color: #eaa8b8; border-radius:10px;'>Invalid username or password!</p>";

        }else{
            echo "<p style='color:red; font-size: 20px; width:fit-content; height: 30px; margin:auto ; 
            background-color: #eaa8b8; border-radius:10px;'>Invalid username or password!</p>";
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
    <title>Login</title>
</head>
<body>
    <div id="box">
        <form method="post">
            <a href="home.html" style="width:100px; height:100px"><img src = "images/logo_name.png" alt = "appLogo" class = "appLogo_name"></a>
            
            <img src = "images/carpic.jpg" alt = "loginpic" class = "login_pic">

            <?php 
                if(isset($_GET["register"])){
                    if($_GET["register"] == "success"){
                        echo '<p class = "signupsuccess" style="border: 1px solid green; border-radius: 10px; margin:auto; width:fit-content; background-color: #95ff00;">Registration Successful!</p>';
                    }
                }
                if(isset($_GET["loggedout"])){
                    if($_GET["loggedout"] == "true"){
                        echo '<p style="color:green";>You have logged out!</p>';
                    }
                }    
            ?>

            <div id= "head" style="font-size: 15px; color:white; height: 30px;"><h1 style="margin: bottom 10px;">Welcome</h1></div>
            
            <input id="text" type="text" placeholder="Username" name="user_name" value=<?php if(isset($_COOKIE["user_name"])){
                echo $_COOKIE["user_name"];} ?>
            ><br><br>
            
            <input id="text" type="password" placeholder="Password" name="password" value=<?php if(isset($_COOKIE["password"])){
                echo $_COOKIE["password"];} ?>><br><br>

            <input id="button" type="submit" value="Login">

            <input type="checkbox" id = "check" name="remember">
            <span>Remember Me</span><br><br>
            
            <h4 style="margin: 5px; color:white;">New User?</h4>
            <a id="link" href="signup.php">Sign Up</a><br><br>
        </form>
    </div>
</body>
</html>