<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: process_registration.php
      * Date: April 2, 2022
      */
    ?>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
<?php
    require('db.php');
# First, assign variables to all of your POST variable values - your post variable must match exactly what you named your form variables on the calling page
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$confirmedpassword = $_POST['confirmedpassword'];

if ($password == $confirmedpassword) {
    $query = "INSERT INTO `user` (`first_name`, `last_name`, `password`, `user_type`, `create_date`) VALUES ('$firstname', '$lastname', '$password', 'U', CURRENT_TIMESTAMP)";
    mysqli_query($connection, $query);
    echo "<p>Congrats, $firstname $lastname! You have successfully registered.</p>\n";
    echo "<p>Return to the <a href=\"\webproject4\user_registration.php\">user registration</a> page.</p>";
} else {
   echo "<p>Your password does not match in both fields. <a href=\"\webproject4\user_registration.php\">Try again</a></p>\n";
}
?>
</html>