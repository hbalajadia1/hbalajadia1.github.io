<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: index.php
      * Date: February 18, 2022
      */
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP Registration Form</title>
  </head>
  <body>
    <class>
    <p>Register or <a href="login.php">Sign In</a></p>
    </class>
    <form action="process_register.php" method="post">  
      <p>First name: <input type="text" name="firstname" required></p>   
      <p>Last name: <input type="text" name="lastname" required></p>
      <p>Email Address: <input type="email" name="email" required></p>
      <p>Password: <input type="password" name="password" required></p>
      <p>Confirm Password: <input type="password" name="confirmedpassword" required></p>
      <input type="submit" value="SUBMIT">
    </form> 
  </body>
</html>