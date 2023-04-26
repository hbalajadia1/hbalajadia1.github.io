<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: process_register.php
      * Date: February 18, 2022
      */
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<?php
# First, assign variables to all of your POST variable values - your post variable must match exactly what you named your form variables on the calling page
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmedpassword = $_POST['confirmedpassword'];

echo "<h1>Your first PHP dynamically created form output</h1>\n";

if ($password == $confirmedpassword) {
  if ($firstname == "Hilario" && $lastname == "Balajadia" && $email == "hilariobalajadiajr@gmail.com" && $password == "12345") {
    echo "<p>Congrats, $firstname $lastname! You have successfully registered.</p>\n";
    echo "<p>Your registered email is $email.</p>\n";
    echo "<p>Your password is $password.</p>\n";
  } else {
    echo "<p>You have entered incorrect information. <a href=\"index.php\">Try again</a></p>\n";
  }
} else {
   echo "<p>Your password does not match in both fields. <a href=\"index.php\">Try again</a></p>\n";
}
?>
</html>