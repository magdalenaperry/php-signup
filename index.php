<?php 

// include this section on pages you want to be able to access if logged in.
session_start();
  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login PHP Site</title>
</head>
<body>
  <button href="logout.php">Logout</button>
  <h1>This is the index page</h1>
  <br>
  <h2>Hello User!</h2>
</body>
</html>