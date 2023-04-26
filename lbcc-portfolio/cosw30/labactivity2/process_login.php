<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: process_login.php
      * Date: February 18, 2022
      */
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<?php
# First, assign variables to all of your POST variable values - your post variable must match exactly what you named your form variables on the calling page
$email = $_POST['email'];
$password = $_POST['password'];

echo "<h1>Your first PHP dynamically created form output</h1>\n";

if ($email == "hilariobalajadiajr@gmail.com" && $password == "12345") {
  echo "<p>Congrats! You are logged in.</p>\n";
  echo "<p>Your registered email is $email.</p>\n";
  echo "<p>Your password is $password.</p>\n";
} else {
  echo "<p>You have an incorrect email or password. <a href=\"index.php\">Try again</a></p>\n";
}
?>
</body>
</html>