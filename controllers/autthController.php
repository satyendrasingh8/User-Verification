<?php 
require 'config/db.php';
session_start();
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

$emailQuery = "SELECT * from users WHERE email=? LIMIT 1";
$stmt = $conn->prepare($emailQuery);
$stmt->bind_param('s',$email);
$stmt->execute();
$result = $stmt->get_result();
$usercount = $result->num_rows;
$stmt->close();
if($usercount>0){
    $errors['email'] = "Email alredy exists";
}
if(count($errors)===0){
    $password = password_hash($password,PASSWORD_DEFAULT);
    $token = bin2hex(random_bytes(50));
    $verfied = false;

    $sql = "INSERT INTO users(username,email,verified,token,password) VALUES(?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssbss',$username,$email,$verified,$token,$password);
    
    if($stmt->execute()){
//login user
$user_id = $conn->insert_id;
$_SESSION['id'] = $user_id;
$_SESSION['useranme'] = $username;
$_SESSION['email'] = $email;
$_SESSION['verified'] = $verified;
// set flash messages
$_SESSION['message']= "You are now logged in!";
$_SESSION['alert-class']="alert-success";
header('location:index.php');
exit();
    }else{
        $errors['db_error'] = "Databaseerror: failed to register";
    }

}

}