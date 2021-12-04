<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-4 offset-md-4 form-div login">
   <form action="login.php" method="post" >
   <h3 class="text-center"> Login  </h3>
    <!-- <div class="alert alert-danger"> 
     <li>username required </li>

   </div>-->
   <div class="form-group">
    <label for="username">Username or Email</label>
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" >
  
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" >
  </div>
  <div class="form-group">
    <label for="passwordconf">Password</label>
    <input type="password" class="form-control" name="passwordconf" >
  </div>
  <button type="submit" name="login-btn" class="btn btn-primary">Login</button>
  <p class="text-center"> Not yet a Member? <a href="signup.php"> Sign Up  </a> </p>
</form>
</div></div></div>
</body>
</html>