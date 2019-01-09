<?php

// Connect to database of problems

include 'config.php';

$host_name = DB_HOST;
$database = DB_NAME;
$user_name = DB_USER;
$password = DB_PASS;

echo "<div>";

$pdo = new PDO("mysql:host=$host_name;dbname=$database", $user_name, $password);

// Debug

// $sql = "SELECT * FROM problems";
// echo $sql . "<br/>";

// $row = $pdo->query($sql);

// foreach ($pdo->query($sql) as $row) {
//   echo "<strong>Problem ID</strong>: " . $row['id_problem'] . "<br/>" . "<strong>Problem</strong>: " . $row['problem'] . "<br/>" . "<strong>Difficulty</strong>: " . $row['difficulty'] . "<br/>" . "<strong>Music Link</strong>: " . $row['musicWeb'] . "<br/><br/>";
// }

echo "</div>";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

  <head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N2SD963');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pop Music Math | A quiz generator by Pius Wong">
    <meta name="author" content="Pius Wong | www.piuswong.com">

    <meta property="og:site_name" content="Pop Music Math | A quiz generator by Pius Wong" />
    <meta property="og:title" content="Pop Music Math | A quiz generator by Pius Wong" />
    <meta property="og:url" content="http://piuswong.net/popmusicmath/" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="A quiz and puzzle generator referencing the mathematics in pop music throughout the decades, by Pius Wong." />
    <meta property="og:image" content="http://piuswong.net/popmusicmath/teaser.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Pop Music Math | A quiz generator by Pius Wong" />
    <meta name="twitter:creator" content="@PiusWong">
    <meta name="twitter:title" content="Pop Music Math | A quiz generator by Pius Wong" />
    <meta name="twitter:description" content="A quiz and puzzle generator referencing the mathematics in pop music throughout the decades, by Pius Wong." />
    <meta name="twitter:image" content="http://piuswong.net/popmusicmath/teaser.png" />

    <link rel="icon" type="image/png" href="favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Prata|Shadows+Into+Light" rel="stylesheet">
    <link href='main.css' rel='stylesheet'>

  </head>

  <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2SD963"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
      <h1 id="title">Pop Music Math!</h1>
      <h2>A quiz and puzzle generator referencing the mathematics in pop music throughout the decades, by <a href="http://www.piuswong.com" title="Browse some of Pius's projects." target="_blank">Pius Wong</a></h2>
    </header>

    <main>

      <div class="separator">
        <img src="img/treble1.svg" class="branding" width=100 height=100>
      </div>

      <form id="survey-form" class="survey-form-full-width">

        <div class="form-header">
          <p id="description">
            Ready for the quiz?
          </p>
        </div>

        <div class="form-inputs">

          <div class="input-item-container">
            <div class="input-label">
              <label for="number" id="number-label">
                How many problems do you want? (1-10)
              </label>
            </div>
            <div class="input-item">
              <div class="input-bg paper input-short">
                <input type="number" id="number" name="number" value="10" min="0" max="10">
              </div>
            </div>
          </div>

          <div class="input-item-container">
            <div class="input-label">
              <legend for="difficulty">
                Difficulty?
              </legend>
            </div>
            <div class="input-item">
              <fieldset class="input-bg paper input-checkbox">
                <div>
                  <label for="difficulty-easier">
                    <input id="difficulty-easier" type="checkbox" name="easier" value="1" checked>
                    <span>Easier</span>
                  </label>
                </div>
                <div>
                  <label for="difficulty-medium">
                    <input id="difficulty-medium" type="checkbox" name="medium" value="2" checked>
                    <span>Medium</span>
                  </label>
                </div>
                <div>
                  <label for="difficulty-harder">
                    <input id="difficulty-harder" type="checkbox" name="harder" value="3" checked>
                    <span>Harder</span>
                  </label>
                </div>
              </fieldset>
            </div>
          </div>

          <div class="input-item-container">
            <div class="input-label">
              <legend for="topics">
                Math topics?
              </legend>
            </div>
            <div class="input-item">
              <fieldset class="input-bg paper input-checkbox">

              <?php
              // Display possible topics in alphabetical order
              $sql = "SELECT topic FROM topics";
              $topics = $pdo->query($sql);
              foreach ($topics as $topic) {
                $topic = $topic['topic'];
                echo "<div><label for='topic-" . $topic . "'>";
                echo "<input id='topic-" . $topic . "' type='checkbox' name='" . $topic . "' value='" . $topic . "' checked>";
                echo "<span>" . $topic . "</span>";
                echo "</label></div>";
              }

              ?>

              </fieldset>
            </div>
          </div>

        </div>

        <div class="form-submit">
          <input type="submit" id="submit">
        </div>

      </form>

    </main>

    <footer>
      <div>
        Powered by HTML/CSS/JS and PHP/mySQL for <a href="http://www.pioslabs.com/" target="_blank">Pios Labs</a>
      </div>
      <div>
        Copyright <?php echo date("Y"); ?> <a href="http://www.piuswong.com" title="Browse some of Pius's projects." target="_blank">Pius Wong</a>
      </div>
    </footer>

  </body>

</html>
