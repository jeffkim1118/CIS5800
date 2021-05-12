<?php

$dbhost = "localhost";
$dbuser = "user";
$dbpass = "cis5800";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Failed to connect to db!");
};

?>
