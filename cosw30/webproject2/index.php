<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Web Project 2: Tuition Calculator</title>
  </head>
  <body>
    <?php
      echo '<img src="long-beach-city-college-logo.png"></img>';
      echo '<h1>Estimated Tuition Calculator</h1>';
    ?> 
    <form name="tuition" method="post" action="process_tuition.php">
      <table>
      <tr>
        <p>
        <td><label for="resident">Are you a current resident of California?</label></td>
        <td><label for="choice1">Yes</label>
        <input type="checkbox" id="yes" name="resident" value="yes" required>
        <label for="choice2">No</label>
        <input type="checkbox" id="no" name="resident" value="no"></td>
      </p>
      </tr>
      <tr>
      <p>
        <td><label for="units">Number of Units</label></td>
        <td><input type="number" id="units" name="units" min="1" max="21" value="1"></td>
      </p>
      </tr>
      <tr>
      <p>
        <td colspan="2">There is a mandatory Student Health Fee of $20 for anyone who registers for classes.</td>
      </p>
      </tr>
      <tr>
      <p>
        <td><label for="service_card">Do you want a College Service card?</label></td>
        <td><label for="choice1">Yes</label>
        <input type="checkbox" id="yes" name="service_card" value="yes">
        <label for="choice2">No</label>
        <input type="checkbox" id="no" name="service_card" value="no"></td>
      </p>
      </tr>
      <tr>
      <p>
        <td><label for="parking_permit">Do you want a Parking Permit?</label></td>
        <td><label for="choice1">Yes</label>
        <input type="checkbox" id="yes" name="parking_permit" value="yes">
        <label for="choice2">No</label>
        <input type="checkbox" id="no" name="parking_permit" value="no"></td>
      </p>
      </tr>
      </table>
      <p>
      <input type="submit" value="Submit"></p>
    </form>
  </body>
</html>