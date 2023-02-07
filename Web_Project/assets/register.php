<?php
require("database/db_con.php");

if (isset($_REQUEST["UserName"])){
    $username = stripslashes($_REQUEST["UserName"]);
    $username = mysqli_real_escape_string($con,$username);
    $email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
    $fName = stripslashes($_REQUEST['fName']);
	$fName = mysqli_real_escape_string($con,$fName);
	$password = stripslashes($_REQUEST['pswd']);
	$password = mysqli_real_escape_string($con,$password);

    $query1 = "INSERT INTO `signUp_info`(Fname,Username,email,user_password) values ('$fName','$username','$email','$password')";
    $result = mysqli_query($con,$query1);
    if($result){
        echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='../index.html'>Login</a></div>";
    }
}else{
    die("dead");
}


?>