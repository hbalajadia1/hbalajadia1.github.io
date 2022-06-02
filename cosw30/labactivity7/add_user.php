<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: user_registration.php
      * Date: April 2, 2022
      */
    ?>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Web Project 5 | User Registration Form</title>
  </head>
  <body>
      <h1>Register for Website</h1>
      <p>Click <a href="/webproject5/list_users.php">here</a> to see the list of users</p>
    <form action="process_registration.php" method="post">  
      <p>First name: <input type="text" name="firstname" required></p>   
      <p>Last name: <input type="text" name="lastname" required></p>
      <p>Password: <input type="password" name="password" required></p>
      <p>Confirm Password: <input type="password" name="confirmedpassword" required></p>
      <input type="submit" value="SUBMIT">
    </form> 
  </body>
</html>