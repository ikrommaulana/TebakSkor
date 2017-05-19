<html> 
<head>
<title>Form Login Admin</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head> 
<body> 
<div class='container'>
<center>
<br/><br/>
<form class="form-inline" action="login.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <input type="submit" class="btn btn-default" name="Login" value="Login">
</form> 
</center>
</div>
</body> 
</html>