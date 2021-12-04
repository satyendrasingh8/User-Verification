<?php 
$errors = array();
$username="";
$email="";
// if user clicks on the signup button
if(isset($_POST['signup-btn'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConf = $_POST['passwordConf'];

//validation
if(empty($username)) {
    $errors['username'] = "username required";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email']= "Email address is invalid";
}
if(empty($email)) {
    $errors['email'] = "email required";
}

if(empty($password)) {
    $errors['password'] = "password required";
}
if($password !== $passwordConf){
    $errors['password'] = "Password do not match!"; 
}

}