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
        <table>
      <tr><td>First Name</td><td><input type="text" name="firstname" required></td></tr>   
      <tr><td>Last Name</td><td><input type="text" name="lastname" required></td></tr>
      <tr><td>Password</td><td><input type="password" name="password" required></td></tr>
      <tr><td>Confirm Password</td><td><input type="password" name="confirmedpassword" required></td></tr>
      <tr><td>User Status</td>
            <td><select name="status" required>
            <option value="A">A</option>
            <option value="I">I</option>
            </select></td></tr>
            </table>
      <input type="submit" value="SUBMIT">
    </form> 
  </body>
</html>