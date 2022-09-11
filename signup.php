<?php 

// include this section on pages you want to be able to access if logged in.
session_start();
  include("connection.php");
  include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
  <title>Sign Up</title>
</head>
<body>
  
<div id="box">

<form action="post">
  <div class="login">Sign Up</div>
<input type="text" name="user_name"> <br>
<input type="password" name="password"> <br>
<input type="text" value="Login"> <br>

<a href="login.php">Login</a>

</form>
</div>
</body>
</html>