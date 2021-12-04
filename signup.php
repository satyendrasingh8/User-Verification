<?php 
require_once 'controllers/authController.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-4 offset-md-4 form-div">
   <form action="signup.php" method="post" >
   <h3 class="text-center"> Register  </h3>
   <?php  if(count($errors)>0): ?>
   <div class="alert alert-danger"> 
     <?php foreach($errors as $error): ?>
     <li> <?php echo $error; ?> </li>
     <?php endforeach; ?>
   </div>
   <?php endif; ?>
   <div class="form-group">
    <label for="username">Username</label>
    <input type="text" value="<?php echo $username ?>"  class="form-control" name="username" aria-describedby="emailHelp" >
  
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" value="<?php echo $email ?>" class="form-control" name="email" aria-describedby="emailHelp" >
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" >
  </div>
  <div class="form-group">
    <label for="passwordConf">Password</label>
    <input type="password" class="form-control" name="passwordConf" >
  </div>
  <button type="submit" name="signup-btn" class="btn btn-primary">Sign up</button>
  <p class="text-center"> Already a Member? <a href="login.php"> Sign In  </a> </p>
</form>
</div></div></div>
</body>
</html>