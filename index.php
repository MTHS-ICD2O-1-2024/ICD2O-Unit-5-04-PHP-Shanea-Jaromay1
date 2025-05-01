<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Tickets for museum, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-yellow.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Tickets for museum, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Tickets for museum, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/student discount.jpg" alt="student discount image" />
      </div>
      <div class="page-content">Enter in the day and your age.</div>
      <div class="page-content-php"></div>
      <form action="./answer.php" method="GET">
        <label>Age: </label>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="age-number" />
          <label class="mdl-textfield__label" for="age-number">Age here...</label>
          <span class="mdl-textfield__error">Input is not a number.</span>
        </div>
        <br />
        <!-- https://www.w3schools.com/tags/tag_select.asp -->
        <div class="mdl-textfield mdl-js-textfield">
          <label for="days-number">Choose a day:</label>
          <select class="mdl-textfield_input" name="days-number">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
          </select>
        </div>
        <br />

        <!-- Raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          TICKET
        </button>
      </form>
      <br />
  </div>
  </main>
  </div>
</body>

</html>