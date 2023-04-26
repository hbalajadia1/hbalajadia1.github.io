<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <title>Web Project 3: Lorem Ipsum Generator</title>
  </head>
  <body>
     <?php
        echo '<h1>Paragraph Generator</h1>';
      ?>
    <form name="number_of_paragraphs" method="post" action="process.php">
      <label for="pagraphs">Choose the number of paragraphs:</label>
        <select id="paragraphs" name="paragraphs" required>
          <option value=""></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>