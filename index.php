<?php

echo "<p>Hello world!</p>";

include 'config.php';

$host_name = DB_HOST;
$database = DB_NAME;
$user_name = DB_USER;
$password = DB_PASS;

echo "<div>";

$pdo = new PDO("mysql:host=$host_name;dbname=$database", $user_name, $password);

$sql = "SELECT id_problem, problem, difficulty, musicWeb FROM problems";
// $sql = "SELECT * FROM episodes";
echo $sql . "<br/>";

$row = $pdo->query($sql);

foreach ($pdo->query($sql) as $row) {
  echo "<strong>Problem ID</strong>: " . $row['id_problem'] . "<br/>" . "<strong>Problem</strong>: " . $row['problem'] . "<br/>" . "<strong>Difficulty</strong>: " . $row['difficulty'] . "<br/>" . "<strong>Music Link</strong>: " . $row['musicWeb'] . "<br/><br/>";
}

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
      <h1 id="title">Inquire.</h1>
      <h2>A quiz and puzzle generator referencing the mathematics in pop music throughout the decades, by <a href="http://www.piuswong.com" title="Browse some of Pius's projects." target="_blank">Pius Wong</a></h2>
    </header>

    <main>

      <div class="separator">
        ***
      </div>

      <form id="survey-form" class="survey-form-full-width">

        <div class="form-header">
          <p id="description">
            Hello! Help us learn more about you.
          </p>
        </div>

        <div class="form-inputs">

          <div class="input-item-container">
            <div class="input-label">
              <label for="name" id="name-label">
                * Name:
              </label>
            </div>
            <div class="input-item">
              <div class="input-bg paper">
                <input type="text" id="name" name="name" required placeholder="Enter your first and last name.">
              </div>
            </div>
          </div>

          <div class="input-item-container">
            <div class="input-label">
              <label for="email" id="email-label">
                * Email:
              </label>
            </div>
            <div class="input-item">
              <div class="input-bg paper">
                <input type="email" id="email" name="email" required placeholder="Enter your email address.">
              </div>
            </div>
          </div>

          <div class="input-item-container">
            <div class="input-label">
              <label for="location">
                * Your Location:
              </label>
            </div>
            <div class="input-item">
              <div class="input-bg paper">
                <input type="text" id="location" name="location" required placeholder="City, state, and/or country.">
              </div>
            </div>
          </div>

          <div class="input-item-container">
            <div class="input-label">
              <label for="number" id="number-label">
                How many podcasts do you listen to, approximately?
              </label>
            </div>
            <div class="input-item">
              <div class="input-bg paper input-short">
                <input type="number" id="number" name="number" placeholder="0" min="0" max="99">
              </div>
            </div>
          </div>

          <div class="input-item-container">
            <div class="input-label">
              <label for="listen">
                How do you like to subscribe or listen to your podcasts?
              </label>
            </div>
            <div class="input-item">
              <div class="input-bg paper input-dropdown">
                <select name="listen">
                  <option value="notsure">No preference</option>
                  <option value="apple">Apple Podcasts / iTunes</option>
                  <option value="soundcloud">SoundCloud</option>
                  <option value="google">Google Play</option>
                  <option value="stitcher">Stitcher</option>
                  <option value="radiopublic">Radio Public</option>
                  <option value="other">Other / Not listed</option>
                </select>
              </div>
            </div>
          </div>

         <div class="input-item-container">
            <div class="input-label">
              <legend for="recommend" required>
                * How likely are you to talk about a podcast with a friend or colleague?
              </legend>
            </div>
            <div class="input-item">
              <fieldset class="input-bg paper input-radio input-short">
                <div>
                  <label for="maybe">
                    <input id="maybe" type="radio" name="recommend" value="maybe">
                    <span>Maybe</span>
                  </label>
                </div>
                <div>
                  <label for="definitely">
                    <input id="definitely" type="radio" name="recommend" value="definitely">
                    <span>Definitely</span>
                  </label>
                </div>
                <div>
                  <label for="notlikely">
                    <input id="notlikely" type="radio" name="recommend" value="notlikely">
                    <span>Not likely</span>
                  </label>
                </div>
              </fieldset>
            </div>
          </div>

          <div class="input-item-container">
            <div class="input-label">
              <label for="notes">
                Do you ever check show notes or transcripts for podcast episodes?
              </label>
            </div>
            <div class="input-item">
              <div class="input-bg paper input-dropdown input-short">
                <select name="notes" id="dropdown">
                  <option disabled selected value="disabled">My answer...</option>
                  <option value="no">No</option>
                  <option value="yes">Yes, often</option>
                  <option value="sometimes">Yes, sometimes</option>
                  <option value="rarely">Rarely</option>
                </select>
              </div>
            </div>
          </div>

          <div class="input-item-container">
            <div class="input-label">
              <legend for="interests">
                What podcast topics most interest you, out of these options?
              </legend>
            </div>
            <div class="input-item">
              <fieldset class="input-bg paper input-checkbox">
                <div>
                  <label for="interest-teachers">
                    <input id="interest-teachers" type="checkbox" name="recommend" value="teachers">
                    <span>Teachers and Teaching</span>
                  </label>
                </div>
                <div>
                  <label for="interest-business">
                    <input id="interest-business" type="checkbox" name="recommend" value="business">
                    <span>Business and EdTech</span>
                  </label>
                </div>
                <div>
                  <label for="interest-design">
                    <input id="interest-design" type="checkbox" name="recommend" value="design">
                    <span>Design Thinking</span>
                  </label>
                </div>
                <div>
                  <label for="interest-young">
                    <input id="interest-young" type="checkbox" name="recommend" value="young">
                    <span>Education for Younger Children</span>
                  </label>
                </div>
                <div>
                  <label for="interest-engineers">
                    <input id="interest-engineers" type="checkbox" name="recommend" value="engineers">
                    <span>Engineers at Work and at Play</span>
                  </label>
                </div>
                <div>
                  <label for="interest-culture">
                    <input id="interest-culture" type="checkbox" name="recommend" value="culture">
                    <span>Cultural Comparisons</span>
                  </label>
                </div>
                <div>
                  <label for="interest-equity">
                    <input id="interest-equity" type="checkbox" name="recommend" value="equity">
                    <span>Equity and Diversity</span>
                  </label>
                </div>
                <div>
                  <label for="interest-research">
                    <input id="interest-research" type="checkbox" name="recommend" value="research">
                    <span>Research and Data</span>
                  </label>
                </div>
                <div>
                  <label for="interest-cs">
                    <input id="interest-cs" type="checkbox" name="recommend" value="cs">
                    <span>Computer Science and Coding</span>
                  </label>
                </div>
                <div>
                  <label for="interest-fundamentals">
                    <input id="interest-fundamentals" type="checkbox" name="recommend" value="fundamentals">
                    <span>Engineering Fundamentals</span>
                  </label>
                </div>
              </fieldset>
            </div>
          </div>

          <div class="input-item-container">
            <div class="input-label">
              <label for="comments">
                Any other comments or suggestions:
              </label>
            </div>
            <div class="input-item">
              <div class="input-bg paper">
                <textarea type="textarea" id="comments" name="comments" placeholder="Enter your comments here..." rows="5"></textarea>
              </div>
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
