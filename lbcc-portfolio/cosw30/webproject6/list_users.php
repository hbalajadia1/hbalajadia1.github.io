<html>
<head>
<!-- <link rel = "preconnect" href = "https://fonts.googleapis.com"> -->
<!-- <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin> -->
<!-- <link href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel = "stylesheet"> -->
<link href = "styles.css" rel = "stylesheet">
  <title>Web Project 6 | List of Users</title>
</head>
<body>
<h1>List of Website Users</h1>
<?php
  require('db.php');
  
  echo '<p>Click <a href="add_user.php">here</a> to add a new user</p>';
  
  if (isset($_GET['msg'])) {
            echo "<h4>Your record has been updated.</h4>";
  }
  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }
    
    //define total number of results you want per page  
    $results_per_page = 10;  
  
    //find the total number of results stored in the database  
    $query = "select * from username";  
    $result = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($result);  
    
    $number_of_page = ceil ($number_of_result / $results_per_page);  
    
    switch($_GET['dir']) {
        case "asc":
            $orderBy = " order by last_name asc";
            break;
        case "desc":
            $orderBy = " order by last_name desc";
            break;
        default:
            $orderBy = " order by user_id asc";
            break;
    }
    
    $page_first_result = ($page - 1) * $results_per_page;  
    // $query = "select * from username " . $orderby . " limit " . $page_first_result . ',' . $results_per_page; 
    // $query = "select * from username";
    $query = "select * from user" . $orderBy;

    echo '<table>';
    for ($page = 1; $page <= $number_of_page; $page++) {  
      echo '<tr><td><a href=webproject6/list_users.php?page='. $page . '>' . $page . '</a></td></tr>';
    }  
    echo '</table>';
    
    $result = mysqli_query($connection, $query);
    echo "<table id=users>";
    // echo "<tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Creation Date</th><th>Status</th><th>Actions</th></tr>";

    echo '<tr><th>User ID</th><th>Username</th><th>First Name</th><th>' . '<a href=list_users.php?dir=asc>Last Name</a>' . '</th><th>Gender</th><th>Age</th><th>User Type</th><th>Creation Date</th><th>Status</th><th>Actions</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['user_id'] . "</td><td>" . $row['username'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['age'] . "</td><td>" .  $row['create_date'] . "</td><td>" . $row['status'] . "</td><td>" . "<a href=edit_user.php?user_id=" . $row['user_id'] . ">Edit</a>" . "</td></tr>";
      }
      echo "</table>";
      ?>
</body>
</html>