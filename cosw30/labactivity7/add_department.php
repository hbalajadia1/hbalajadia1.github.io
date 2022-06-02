<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: department_registration.php
      * Date: April 17, 2022
      */
    ?>
    <link rel = "stylesheet" type = "text/css" href = "styles.css">
    <title>Lab Activity 7 | Add Department Form</title>
  </head>
  <body>
    <h1>Add a Department</h1>
    <p>Click <a href="/labactivity7/list_departments.php">here</a> to see the list of departments</p>
    <form action="process_department.php" method="post">
    <table>
      <tr><td>Department Name</td><td><input type="text" name="departmentname" required></td></tr>   
      <tr><td>Number of Employees</td><td><input type="text" name="numofemployees" required></td></tr>
      <tr><td>Building Name</td><td><input type="text" name="buildingname" required></td></tr>
      <tr><td>Department Status</td>
            <td><select name="status" required>
            <option value="A">A</option>
            <option value="I">I</option>
            </select></td></tr>
        </table>
      <input type="submit" value="SUBMIT FORM">
    </form>
  </body>
</html>