<!DOCTYPE html>
<html lang="en">
<head>
  <!--Meta Data-->
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta author="Gustav Ihlenfeld">
  <title>Guess my Number</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Favicon-->
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (1)/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (1)/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (1)/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io (1)/site.webmanifest">


  <!--Stylesheet-->
  <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1><i>Guess my Number, with PHP</i></h1>
  <img src="./images/guess.jpg" alt="guess" style="float: right; margin: 0 10px;">
  <p><b><u>Guess a number between 1 and 6:</u></b></p>
  <form action="result.php" method="post">
    <label for="guess"><b><u>Guess:</u></b></label>
    <input type="number" id="guess" name="guess">
    <br></br>
    <button type="submit" name="submitGuess">Submit Guess</button>
  </form>
  <p>
    <?php
    // Display the result here
    if(isset($_GET['result'])){
        echo $_GET['result'];
    }
    ?>
  </p>
</body>
</html>
