<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: process_registration.php
      * Date: February 20, 2022
      */
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <?php
  echo "<h1>Mission to Mars</h1>
    <h2>Human Volunteer Form</h2>";
  ?>
    <div>
<?php
# First, assign variables to all of your POST variable values - your post variable must match exactly what you named your form variables on the calling page
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$agerange = $_POST['agerange'];
$family_status = $_POST['family_status'];
$testing = $_POST['choice'];

echo "<class>";

  echo "<p>Thank you, $firstname $lastname. Please be on the looking for an email to the email address you provided: $email. You should be on the lookout for a phone call from a not-sketchy number beginning with 1-800 to your registered phone number: $telephone</p>";

if ($agerange == "18-20") {
  echo "<p>Thank you, $firstname $lastname. Please be on the looking for an email to the email address you provided: $email. You should be on the lookout for a phone call from a not-sketchy number beginning with 1-800 to your registered phone number: $telephone</p>";
} else if ($agerange == "21-29") {
  echo "<p>You're young and kipper, aren't you!</p>";
} else if ($agerange == "30-39") {
    echo "<p>You still have plenty of time on your hands.</p>";
} else if ($agerange == "40-49") {
  echo "<p>This is going to be a great fresh start!</p>";
} else if ($agerange == "50-59") {
  echo "<p>This is going to be exciting, isn't it?!</p>";
} else {
  echo "<p>What a new adventure to go on!</p>";
}

if ($family_status == "single") {
  echo "<p>And no one will miss you when you're gone! Unless you're dating someone.</p>";
} else if ($family_status == "married_no_children") {
  echo "<p>Just make sure your spouse is okay with you leaving!</p>";
} else {
  echo "<p>Don't forget to write to your family!</p>";
}

if ($testing == "yes") {
  echo "<p>Thank you for subjecting yourself-I mean volunteeting to testing.</p>";
} else {
  echo "<p>You're no fun. But that's okay. Keep your organs to yourself.</p>";
}
echo "</class>";
?>
  <div>
</body>
</html>