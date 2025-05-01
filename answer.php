<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Tickets for museum, in PHP" />
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
  <title>Tickets for museum, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Tickets for museum, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/student discount.jpg" width="250" />
      </div>
      <div class="page-content-php">
        <div id="submit">
          <?php
          // input
          $ageNumber = $_GET['age-number'];
          $daysNumber = $_GET['days-number'];
          // process
          if ($daysNumber === 'Tuesday' || $daysNumber === 'Thursday' || ($ageNumber > 12 && $ageNumber < 21)) {
            // output
              echo "Your age is " . $ageNumber  .  " and the days is " . $daysNumber . ".<br>You get the student discount for the museum.";
          } else {
            // output
              echo "Your age is " . $ageNumber . " and the days is " . $daysNumber . ".<br>You pay the regular price";
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