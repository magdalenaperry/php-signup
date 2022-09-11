<?php

// include this section on pages you want to be able to access if logged in.
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // something was posted
  // collect data from post method
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
    // save to database
    $user_id = random_num(20);
    $query = "INSERT INTO users (user_id, user_name, password) VALUES('$user_id', '$user_name', '$password')";

    mysqli_query($con, $query);
    
    header("Location: login.php");
    die;

  } else {
    echo 'please enter some valid information.';
  }
}

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

    <form method="post">
      <div class="login">Sign Up</div>
      <input type="text" name="user_name" placeholder="Username"> <br>
      <input type="password" name="password" placeholder="Password"> <br>
      <input type="submit" value="Signup"> <br>

      <a href="login.php">Login</a>

    </form>
  </div>
</body>

</html>