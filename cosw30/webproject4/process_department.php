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
$department_name = $_POST['departmentname'];
$num_of_employees = $_POST['numofemployees'];
$building_name = $_POST['buildingname'];

$query = "INSERT INTO `department` (`department_name`, `num_of_employees`, `building_name`) VALUES ('$department_name', '$num_of_employees', '$building_name')";
    mysqli_query($connection, $query);
    echo "<p>Congrats! You have successfully registered the $department_name.</p>\n";
    echo "<p>Return to the <a href=\"\webproject4\department_registration.php\">department registration</a> page.</p>";
?>
</html>