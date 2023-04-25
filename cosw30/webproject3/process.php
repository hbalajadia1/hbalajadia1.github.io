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
        echo '<h1>Lorem Ipsum Generator</h1>';
      ?>
    <?php
      // 1. Assemble an array of the first 50 top words
      $topWords = array('the', 'at', 'there', 'some', 'my', 'of', 'be', 'use', 'her', 'than', 'and', 'this', 'an', 'would', 'first', 'a',  'have', 'each', 'make', 'water', 'to', 'from', 'which', 'like', 'been', 'in', 'or', 'she/he/they', 'her/him/them', 'call', 'is', 'one', 'do', 'into', 'who', 'you', 'had', 'how', 'time', 'oil', 'that', 'by', 'their', 'has', 'its', 'it', 'word', 'if', 'look', 'now');
      // 2. Create an array of 50 words related to a particular topic (The SARS-CoVID-19 Pandemic)
      $pandemicWords = array('flu-like', 'pandemic', 'mask', 'gloves', 'soap', 'scrubs', 'social distance', 'quarrantine', 'clean', 'wash', 'delivery', 'vaccine', 'sick', 'fever', 'cough', 'shot', 'sneeze', 'fatigue', 'lungs', 'breathing', 'tired', 'shower', 'sanitize', 'toilet paper', 'cleaning supples', 'panic', 'closure', 'dose', 'Tylenol', 'runny nose', 'stuffy nose', 'Delta', 'Omicron', 'headache', 'sore throat', 'diarrhea', 'confusion', 'aches', 'congestion', 'oxygen', 'oximeter', 'thermometer', 'temperature', '98.6', 'taste', 'smell', 'loss', 'inside', 'outside');
      // 3. Create an array of all of the words in one array
      $totalWords = array_merge($topWords, $pandemicWords);

      $numberOfParagraphs = $_POST['paragraphs'];

      $mySentence;
      // for each paragraph
      for ($iterations = 0; $iterations < $numberOfParagraphs; $iterations++) {
      // 4. Generate the number of random sentences to be created in the paragraph
      // $number0fSentences is a random number between 3 and 5
      // 5. Generate the number of words in each sentence
      // $randomNumber between 2 and 9; sentences must be a minimum of two words
      $numberOfSentences = rand(3, 5);
        echo '<p>';
        // for each sentence
        for ($i = 0; $i < $numberOfSentences; $i++) {
          // for the nunber of random words in each sentence
          for ($j = 0; $j < $randomNumberOfWords; $j++) {
            // print the first word as a capital
            if ($j == 0) {
              $mySentence .= ucfirst($totalWords[rand(0, sizeof($totalWords) - 1)]) . ' ';
            }
            // a period after the last word with a space or
            else if ($j == ($randomNumberOfWords - 1)) {
              $mySentence .= $totalWords[rand(0, sizeof($totalWords) - 1)] . '. ';    
            }
            // and a space between each word that is not the last
            else {
              $mySentence .= $totalWords[rand(0, sizeof($totalWords) - 1)] . ' ';
            }
          }
        // change the number of words in the next sentence
        echo $mySentence;
        $mySentence = "";
        $randomNumberOfWords = rand(2, 9);
      }
      echo '</p>';
    }
    
    ?> 

    <!-- get a new paragraph if wanted -->
    <button onClick="window.location.reload();">Get a New Paragraph</button>
  </body>
</html>