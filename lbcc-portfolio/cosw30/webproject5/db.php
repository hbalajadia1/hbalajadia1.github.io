<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Connect to MySQL</title>
</head>
<body>
<?php

$host = "sql3.freemysqlhosting.net";
$user = "sql3480230";
$pass = "tbu5v7ZM3W";
$db = "sql3480230";
$port = 3306;

$connection = mysqli_connect($host, $user, $pass, $db, $port); // Catch any connection errors
if(mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" .mysqli_connect_errno() . ")"
);
}
else {
  // echo "connection made";
}

// If no errors, you can proceed with your sql queries

?>

</body>
</html>