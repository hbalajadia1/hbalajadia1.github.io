<?php
        require("db.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $department_id = $_POST['department_id'];
            $department_name = $_POST['department_name'];
            $num_of_employees = $_POST['num_of_employees'];
            $building_name = $_POST['building_name'];
            $status = $_POST['status'];
            $update_query = "update department set department_name = '" .
              $department_name . "', num_of_employees = " . $num_of_employees .
              ", building_name = '" . $building_name . "', status = '" . $status
              . "' where department_id = " . $department_id;
            $update_result = mysqli_query($connection, $update_query);
            if ($update_result) {
                // session_write_close();
                // header("location: list_departments.php?msg=ok", true, 301);
                // did JavaScript because I was frustrated it was not working...
                echo "<script>window.top.location='list_departments.php?msg=ok'</script>";
                exit();
            } else {
                echo "Update failed.";
            }
        } else {
            $department_id = $_GET['department_id'];
            $query = "select * from department where department_id = " . $department_id;
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($result);
        }
      /*
      * Name: Hilario Balajadia, Jr.
      * File: department_registration.php
      * Date: April 17, 2022
      */
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Web Project 5 | Department Department Form</title>
  </head>
  <body>
      <h1>Edit an Existing Department</h1>
      <p>Click <a href="list_departments.php">here</a> to see the list of departments</p>
    <form action="edit_department.php" method="post">
    <table id="department">
      <tr>
          <td>Department ID:</td>
          <td><input type="text" name="department_id" value=<?php echo $row['department_id']; ?> readonly></td>
        </tr>
        <tr>
            <td>Department Name:</td>
            <td><input type="text" name="department_name" value="<?php echo $row['department_name'];?>" required></td>
        </tr>
        <tr>
            <td>Number of Employees:</td>
            <td><input type="text" name="num_of_employees" value=<?php echo $row['num_of_employees'];?> required></td></tr>
        <tr><td>Building Name:</td>
            <td><input type="text" name="building_name" value="<?php echo $row['building_name'];?>"
                required></td></tr>
        <tr><td>Department Status</td>
            <td><select name="status" required>
            <option value="A">A</option>
            <option value="I">I</option>
            </select></td></tr>
    </table>
      <input type="submit" value="SUBMIT">
    </form> 
  </body>
</html>