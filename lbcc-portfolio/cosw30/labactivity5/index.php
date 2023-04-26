<?php

function addtwo( $a = 0, $b = 0 ) {
    return ( $a + $b );
}

function subtracttwo( $a = 0, $b = 0 ) {
    return ( $a - $b );
}

function multiplytwo( $a = 0, $b = 0 ) {
    return ( $a * $b );
}

function divideTwo( $a = 0, $b = 0 ) {
    return ( $a / $b );
}
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$operator = $_POST['operator'];
?>
<html>
<head>
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel = "stylesheet">
<link href = "styles.css" rel = "stylesheet">
<title>PHP - Lab 5</title>
</head>
<body>
<h1>The Great Function Machine 2.0</h1>
<form action = "index.php" method = "post">
<table>
<tr>
<td><input type = "text" name = "value1" value = "0" /></td>
<td><select name = "operator" id = "operator">
<option value = ""></option>
<option value = "+">+</option>
<option value = "-">-</option>
<option value = "*">*</option>
<option value = "/">/</option>
<option value = "all">All</option></td>
<td><input type = "text" name = "value2" value = "0" /></td>
<td><input type = "submit" value = "Calculate values" /></td>
</tr>
</table>
</form>
<?php
if ( $operator == "+" ) {
    echo "<table><tr><td>" . $value1 . "</td><td> + </td><td>" . $value2 . "</td><td> = </td><td>";
    echo addTwo( $value1, $value2 ) . "</td></tr></table>";
} else if ( $operator == "-" ) {
    echo "<table><tr><td>" . $value1 . "</td><td> - </td><td>" . $value2 . "</td><td> = </td><td>";
    echo subtractTwo( $value1, $value2 ) . "</td></tr></table>";
} else if ( $operator == "*" ) {
    echo "<table><tr><td>" . $value1 . "</td><td> * </td><td>" . $value2 . "</td><td> = </td><td>";
    echo multiplyTwo( $value1, $value2 ) . "</td></tr></table>";
} else if ( $operator == "/" ) {
    echo "<table><tr><td>" . $value1 . "</td><td> / </td><td>" . $value2 . "</td><td> = </td><td>";
    echo divideTwo( $value1, $value2 ) . "</td></tr></table>";
} else if ( $operator == "all" ) {
    echo "<table><tr><td>" . $value1 . "</td><td> + </td><td>" . $value2 . "</td><td> = </td><td>";
    echo addTwo( $value1, $value2 ) . "</td></tr>";
    echo "<tr><td>" . $value1 . "</td><td> - </td><td>" . $value2 . "</td><td> = </td><td>";
    echo subtractTwo( $value1, $value2 ) . "</td></tr>";
    echo "<tr><td>" . $value1 . "</td><td> * </td><td>" . $value2 . "</td><td> = </td><td>";
    echo multiplyTwo( $value1, $value2 ) . "</td></tr>";
    echo "<tr><td>" . $value1 . "</td><td> / </td><td>" . $value2 . "</td><td> = </td><td>";
    echo divideTwo( $value1, $value2 ) . "</td></tr><table>";
} else {
    echo "<p>No operator was selected.</p>";
}
?>
</body>
</html>