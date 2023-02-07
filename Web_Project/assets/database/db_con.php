<?php
$servername = "localhost";
$username = "root";
$dataBase = "webDB";

$con = mysqli_connect($servername, $username);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $sql="CREATE database IF NOT EXISTS webDB";
    if (mysqli_query($con,$sql)){
        echo "<br>Database creted succesfully ";
    }else{
        echo "<br> error occure while creating table". mysqli_error($con);
    }

    mysqli_close($con);
    $con = mysqli_connect($servername, $username,"",$dataBase);
    if (!$con){
    die("Connection Failed: " . mysqli_connect_error());
}else{
$sqlTable ="CREATE TABLE IF NOT EXISTS signUp_info (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Fname VARCHAR(30) NOT NULL,
    Username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    user_password VARCHAR(50)
    )";

if (mysqli_query($con,$sqlTable)){
    echo "<br>Table creted succesfully ";
}else{
    echo "<br> error occure while creating table". mysqli_error($con);
}}
}

?>