<html>
<head>
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel = "stylesheet">
<link href = "styles.css" rel = "stylesheet">
  <title>Web Project 4 | List of Departments</title>
</head>
<body>
<h1>List of Departments</h1>
<?php
  echo '<p>Click <a href="/webproject4/list_users.php">here</a> to see the list of users</p>';
  echo '<p>Click <a href="/webproject4/department_registration.php">here</a> to register a new department</p>';
  
  require('db.php');

  $query = "select * from department order by department_name asc";

  $result = mysqli_query($connection, $query);
?>
  <table>
<?php
    echo "<tr><th>Department Name</th><th>Number of Employees</th><th>Building Name</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row['department_name'] . "</td><td>" . $row['num_of_employees'] . "</td><td>" . $row['building_name'] . "</td></tr>";
  }
?>
  </table>
  </body>
</html>