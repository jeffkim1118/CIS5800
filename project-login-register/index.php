<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <title>Driveways For Rent</title>
</head>
<body>

<a href="logout.php">Logout</a>
<h1>Hello, <?php echo $user_data['user_name'];?>!</h1>

<div class="card">
  <a href="#" id="profile_image"><img src="images/default-profile.png" alt="user_pic" style="width:100%"></a>
  
    <form action="users/upload.php" method="post" enctype="multipart/form-data">
        <input type = "file" name = "my_image">

        <input type = "submit" name = "submit" value = "Upload">
    </form>
  
  <h3><?php echo $user_data['user_name'];?></h3>
  <label>Email</label>
  <p><?php echo $user_data['email'];?></p>
  <p><button>Contact</button></p>
</div>


    
</body>
</html>