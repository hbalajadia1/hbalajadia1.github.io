<html>
<head>
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel = "stylesheet">
<link href = "styles.css" rel = "stylesheet">
  <title>Web Project 5 | List of Users</title>
</head>
<body>
<h1>List of Website Users</h1>
<?php
  require('db.php');
  
  
  echo '<p>Click <a href="/webproject5/list_departments.php">here</a> to see the list of departments</p>';
  echo '<p>Click <a href="/webproject5/add_user.php">here</a> to add a new user</p>';
  $query = "select * from user";

  $result = mysqli_query($connection, $query);
?>
  <table>
<?php
    echo "<tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Creation Date</th><th>Status</th><th>Actions</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row['user_id'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['create_date'] . "</td><td>" . $row['status'] . "</td><td>" . "<a href=edit_user.php?user_id=" . $row['user_id'] . ">Edit</a>" . "</td></tr>";
  }
?>
  </table>
</body>
</html>