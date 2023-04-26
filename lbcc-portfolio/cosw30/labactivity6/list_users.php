<html>
<head>
  <link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel = "stylesheet">
<link href = "styles.css" rel = "stylesheet">
  <title>Lab 6</title>
</head>
<?php
  require('db.php');
  echo '<h1> List of Website Users</h1>';

  $query = "select * from user";

  $result = mysqli_query($connection, $query);
?>
  <table>
<?php
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row['user_id'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['create_date'] . "</td></tr>";
  }
?>
  </table>
</html>