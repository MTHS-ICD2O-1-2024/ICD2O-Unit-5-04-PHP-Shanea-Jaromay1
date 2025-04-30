<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Watch a Movie, in PHP" />
  <meta name=" keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Watch a Movie, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Watch a Movie, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/movie_ratings.jpg" width="250" />
      </div>
      <div class="page-content-php">
        <div id="guess">
          <?php
          // Generate random number
          $randomNumber = random_int(1, 6);
          // input
          $ageNumber = $_GET['age-number'];
          // process
          if ($ageNumber >= 17) {
            // output
            echo "Your age is:" . $ageNumber . "You can see a R movie alone.";
          }
          else if ($ageNumber >= 13) {
            // output 
            echo "Your age is:" . $ageNumber . "You can see a PG-13 movie alone.";
          } else if ($ageNumber >= 5) {
            // output 
            echo "Your age is:" . $ageNumber . "You can see a G or PG movie alone.";
          } else {
            // output 
            echo "Your age is:" . $ageNumber . "Kiddo, you are too young for most of the movies.";
          }
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>