<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
    <title>Web Project 2: Tuition Calculator - Process Tuition</title>
  </head>
  <body>
    <img src="long-beach-city-college-logo.png"></img>
    <h1>Estimated Tuition Calculation</h1>
    <?php
      $resident = $_POST['resident'];
      $units = $_POST['units'];
      $service_card = $_POST['service_card'];
      $parking_permit = $_POST['parking_permit'];
      $healthFee = 20;
      $unitCost = 0;
      $unitTotalCost = 0;
      $tuitionCost = 0;
      $service_cost = 0;
      $parking_cost = 0;
      $final_cost = 0;
      // The average scholarship amount at LBCC is $3333. We'll take a third ($1111) which is our maximum for this exercise.
      $scholarshipAward = rand(0, 1111);

      if ($resident == 'yes') {
        $unitCost = 46;
      } else {
        $unitCost = 361;
      }

      $unitTotalCost = $unitCost * $units;
      $tuitionCost += $unitTotalCost;
      
      if ($service_card == 'yes') {
        $service_cost = 20;
      }
      $tuitionCost += $service_cost;
      if ($parking_permit == 'yes') {
        $parking_cost = 30;
      }
      $tuitionCost += $parking_cost;

      while ($scholarshipAward > $tuitionCost) {
        $scholarshipAward = rand(0, 1111);
      }

      echo '<table>';
      
      echo '<tr>
<td><p>Cost of Classes: <br>' . $units . ' unit(s) × $' . number_format($unitCost, 2) . ' = </td><td>$' . number_format($unitTotalCost, 2) . '</p></td></tr>';
      echo '<tr><td><p>Student Health Fee: </td><td>$' . number_format($healthFee, 2) . '</p></td></tr>';
      echo '<tr><td><p>College Services Card: </td><td>$' . number_format($service_cost, 2) . '</p></td></tr>';
      echo '<tr><td><p>Parking Permit: </td><td>$' . number_format($parking_cost, 2) . '</p></td></tr>';
      echo '<tr><td colspan=2>-</td></tr>';
      echo '<tr><td><p>Total Registration Cost: </td><td>$' . number_format($tuitionCost, 2) . '</p></td></tr>';
      echo '<tr><td><p>Scholarship Award: </td><td>$' . number_format($scholarshipAward, 2) . '</p></td></tr>';

      $final_cost = $tuitionCost - $scholarshipAward;
      echo '<tr><td colspan=2>-</td></tr>';
      echo '<tr><td><p>Total Balance Due: </td><td>$' . number_format($final_cost, 2) . '</p></td></tr>';

      echo '</table>';
      /*
      echo '<p>' . $resident . '</p>';
      echo '<p>' . $units . '</p>';
      echo '<p>' . $service_card . '</p>';
      echo '<p>' . $parking_permit . '</p>';
      echo '<p>' . $unitCost . '</p>';
      echo '<p>' . $unitTotalCost . '</p>';
      echo '<p>' . $service_cost . '</p>';
      echo '<p>' . $parking_cost . '</p>';
      echo '<p>' . $tuitionCost . '</p>';
      echo '<p>' . $scholarshipAward . '</p>';
      */

    ?> 
  </body>
</html>