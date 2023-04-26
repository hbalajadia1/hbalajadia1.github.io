<html>
  <head>
    <?php
     /*
      * Name: Hilario Balajadia, Jr.
      * File: index.php
      * Date: February 20, 2022
      */
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP Registration Form</title>
  </head>
  <body>
    <h1>Mission to Mars</h1>
    <h2>Human Volunteer Form</h2>
    <form action="process_registration.php" method="post">  
      <p>First Name: <input type="text" name="firstname" required></p>   
      <p>Last Name: <input type="text" name="lastname" required></p>
      <p>Email Address: <input type="email" name="email" required></p>
      <p>Phone Number: <input type="tel" name="telephone" required></p>
      <p>Age Range:
        <select name="agerange" required>
          <option value=""></option>
          <option value="18-21">18-20</option>
          <option value="21-29">21-29</option>
          <option value="30-39">30-39</option>
          <option value="40-49">40-49</option>
          <option value="50-59">50-59</option>
          <option value=">60">>60</option>
        </select></p>
      <p>Family Status:<br>
        <input type="radio" id="single" name="family_status" value="single" required>
        <label for="single">Single</label><br>
        <input type="radio" id="married_no_children" name="family_status" value="married_no_children">
        <label for="married_no_children">Married, no children</label><br>
        <input type="radio" id="married_w_children" name="family_status" value="married_w_children">
        <label for="married_w_children">Married, with children</label></p><br>
        <p><textarea name="description" rows="10" cols="150">Describe why you should be picked for the Mars Human Colony.</textarea></p>
      <p>
        Accept Terms of Volunteer Human Trial:<br>
        <input type="checkbox" id="yes" name="choice" value="Yes">
        <label for="choice1">Yes</label><br>
        <input type="checkbox" id="no" name="choice" value="No">
        <label for="choice2">No</label><br></p>
      <input type="submit" value="SUBMIT">
    </form> 
  </body>
</html>