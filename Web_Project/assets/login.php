<?php
require("database/db_con.php");

session_start();
if (isset($_POST['uName'])){
    $username = stripslashes($_REQUEST['uName']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['pswd']);
		$password = mysqli_real_escape_string($con,$password);

    $query1 = "SELECT * FROM `signUp_info` WHERE Username = '$username' and user_password='$password'";
    $result = mysqli_query($con,$query1) or die(mysqli_error($con));
    $row  = mysqli_num_rows($result);
    if ($row == 1){
        // $_SESSION['uName'] = $username;
        // header("Location: main.html");
        echo "<div class='form'><h3>You are Login In successfully.</h3><br/>Click here to <a href='../index.html'>Login</a></div>";
        }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='../index.html'>Login</a></div>";
    }

}

?>