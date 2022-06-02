<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: department_registration.php
      * Date: April 2, 2022
      */
    ?>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Web Project 4 | Department Registration Form</title>
  </head>
  <body>
      <h1>Register a New Department</h1>
      <p>Click <a href="/webproject4/list_departments.php">here</a> to see the list of departments</p>
    <form action="process_department.php" method="post">  
      <p>Department Name: <input type="text" name="departmentname" required></p>   
      <p>Number of Employees: <input type="text" name="numofemployees" required></p>
      <p>Building Name: <input type="text" name="buildingname" required></p>
      <input type="submit" value="SUBMIT">
    </form> 
  </body>
</html>