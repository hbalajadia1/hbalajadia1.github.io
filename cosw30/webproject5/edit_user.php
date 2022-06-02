<?php
        require("db.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user_id = $_POST['user_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $password = $_POST['password'];
            $confirmed_password = $_POST['confirmed_password'];
            $user_type = $_POST['user_type'];
            $status = $_POST['status'];
            if ($password == $confirmed_password) {
                $update_query = "update user set first_name = '" .
                  $first_name . "', last_name = '" . $last_name .
                  "', password = '" . $password . "', user_type = '" . $user_type ."', status = '" . $status
                  . "' where user_id = " . $user_id;
                $update_result = mysqli_query($connection, $update_query);
                if ($update_result) {
                    // session_write_close();
                    // header("location: list_departments.php?msg=ok", true, 301);
                    // did JavaScript because I was frustrated it was not working...
                    echo "<script>window.top.location='list_users.php?msg=ok'</script>";
                    exit();
                } else {
                    echo "Update failed.";
                }
            } else {
                echo "Passwords do not match.";
            }
        } else {
            $user_id = $_GET['user_id'];
            $query = "select * from user where user_id = " . $user_id;
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
    <title>Web Project 5 | Update User Form</title>
  </head>
  <body>
      <h1>Edit an Existing User</h1>
      <p>Click <a href="/webproject5/list_users.php">here</a> to see the list of users</p>
    <form action="edit_user.php" method="post">
    <table id="user">
      <tr>
          <td>User ID</td>
          <td><input type="text" name="user_id" value=<?php echo $row['user_id']; ?> readonly></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name" value="<?php echo $row['first_name'];?>" required></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name" value="<?php echo $row['last_name'];?>" required></td>
        </tr>
        <tr><td>Password</td><td><input type="password" name="password" required></td></tr>
        <tr><td>Confirm Password</td><td><input type="password" name="confirmed_password" required></td></tr>
        <tr>
        <td>User Type</td>
            <td><select name="user_type" required>
            <option value="M">M</option>
            <option value="U">U</option>
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