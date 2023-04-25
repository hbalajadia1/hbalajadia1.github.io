<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <title>Lab 4</title>
  </head>
  <body>
    <?php
      echo '<h1>Random Sentence Generator</h1>';

      // 1. Assemble an array of the first 15 top words
      $topWords = array('the','be','of','and','a','in','to','have', 'it', 'to', 'for', 'I', 'that', 'you', 'she/he/they');
      // 2. Create an array of 15 words related to a particular topic (The SARS-CoVID-19 Pandemicc)
      $pandemicWords = array('flu-like', 'pandemic', 'mask', 'gloves', 'soap', 'scrubs', 'social distance', 'quarratine', 'clean', 'wash', 'delivery', 'vaccine', 'sick', 'fever', 'cough');
      // 3. Create an array of all of the words in one array
      $totalWords = array_merge($topWords, $pandemicWords);
      // 4. Generate the number of random sentences to be created in the paragraph
      // $number0fSentences is a random number between 3 and 6
      $numberOfSentences = rand(3, 6);
      // 5. Generate the number of words in each sentence
      // $randomNumber between 2 and 9; sentences must be a minimum of two words
      $randomNumber = rand(2, 9);

      echo '<p>';
      // for each sentence
      for ($i = 0; $i < $numberOfSentences; $i++) {
        // for the nunber of random words in each sentence
        for ($j = 0; $j < $randomNumber; $j++) {
          // print the first word as a capital
          if ($j == 0) {
            echo ucfirst($totalWords[rand(0, sizeof($totalWords) - 1)]) . ' ';
          }
          // a period after the last word with a space or
          else if ($j == ($randomNumber - 1)) {
            echo $totalWords[rand(0, sizeof($totalWords) - 1)] . '. ';    
          }
          // and a space between each word that is not the last
          else {
            echo $totalWords[rand(0, sizeof($totalWords) - 1)] . ' ';
          }
        }
        // change the number of words in the next sentence
        $randomNumber = rand(2, 9);
      }
      echo '</p>';
    ?> 

    <!-- get a new paragraph if wanted -->
    <button onClick="window.location.reload();">Get a New Paragraph</button>
  </body>
</html>