<?php

if (isset($_POST['submit']) && isset($_POST['my_image'])){
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

   


}else{
    header("Location: index.php")
}