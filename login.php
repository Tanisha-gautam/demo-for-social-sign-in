<?php
session_start();
$username="";
$email="";

$errrors=array();

$db=mysqli_connect('localhost','root',"",'practice');
$username=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$rpassword=mysqli_real_escape_string($db,$_POST['rpassword']);


if(empty($password)){array_push($errors,password is required)}
if(empty($email)){array_push($errors,email is required)}
if(empty($password!=$rpassword)){array_push($errors,password does not match )}

$user_check_query="SELECT * FROM user WHERE username='$username' or email='$email' LIMIT 1";

$results=mysqli_query($db,$user_check_query);
$user= mysqli_fetch_assoc($result);

if($username){
    if($username['username']===$username){array_push($errors,this username is already registered)}
    if($username['email']===$email){array_push($errors,this email is already registered for another username )}
}

if(count($errors)==0){
    $password=md5($password);
    $query="INSERT INTO username(username,email,password)VALUES($username,$email,$password)";
    
}
mysqli_query($db,$query);
$_SESSION['username']=$username;
$_SESSION['success']="you are now successfully logged in";
 
header('loaction: index.php')
?>