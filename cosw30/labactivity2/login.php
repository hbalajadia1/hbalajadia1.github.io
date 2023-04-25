<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: login.php
      * Date: February 18, 2022
      */
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP Login Form</title>
  </head>
  <body>
    <p><a href="index.php">Register</a> or Sign In</p>
    <form action="process_login.php" method="post">  
      <p>Email Address: <input type="email" name="email" required></p>
      <p>Password: <input type="password" name="password" required></p>
      <input type="submit" value="SUBMIT">
    </form> 
  </body>
</html>