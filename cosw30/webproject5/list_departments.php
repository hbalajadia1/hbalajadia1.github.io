<?php
    require('db.php');
    $query = "select * from department order by department_name asc";
    $result = mysqli_query($connection, $query);
?>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "styles.css">
    <!-- <link rel = "preconnect" href = "https://fonts.googleapis.com"> -->
    <!-- <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel = "stylesheet"> -->
    <title>Web Project 5 | List of Departments</title>
</head>
<body>
    <h1>List of Departments</h1>
    <?php
        if (isset($_GET['msg'])) {
            echo "<h4>Your record has been updated.</h4>";
        }
        echo '<p>Click <a href="add_department.php">here</a> to add a new department</p>';
        echo '<p>Click <a href="list_users.php">here</a> to see the list of users</p>';
        echo '<table id=departments>';
        echo "<tr><th>Department Name</th><th>Number of Employees</th><th>Building Name</th><th>Status</th><th>Actions</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['department_name'] . "</td><td>" . $row['num_of_employees'] . "</td><td>" . $row['building_name'] . "</td><td>" . $row['status'] . "</td><td>" . "<a href=edit_department.php?department_id=" . $row['department_id'] . ">Edit</a>" . "</td></tr>";
            
        }
  echo "</table>";
  ?>
  </body>
</html>