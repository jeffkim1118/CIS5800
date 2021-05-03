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
                    
                    if($user_data['password'] == $password){
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }

            echo "Invalid username or password";

        }else{
            echo "Invalid username or password";
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
            <div style="font-size: 20px; margin: 10px; color:white;">Login</div>
            
            <input id="text" type="text" placeholder="Username" name="user_name"><br><br>
            
            <input id="text" type="password" placeholder="Password" name="password"><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a id="link" href="signup.php">Click to Sign Up</a><br><br>
        </form>
    </div>
</body>
</html>