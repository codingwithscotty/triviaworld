<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<title>TriviaWorld</title>
</head>
<body>
<div id="wrap">
  <div id="header">
    <a href="index.html"><img src="/images/logo.png" alt="TriviaWorld Logo" style="height: 125px; width: 250px; border: none;"></a>
    <h2 class="gettingstarted">
      To Get Started:
      <ul>
        <br /><br /><li><a href="signup.html">Sign Up</a></li> |
      <li><a href="login.html">Login</a></li>
      </ul>
    </h2>
    <div id="menu">
      <!--<ul>
        <li id="current"><a href="index.html">Home</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Sign Up</a></li>
      </ul>-->
    </div>
    <!--<ul style="margin-top: 135px; margin-right: 1125px;">
    <li><a href="login.html">Login</a></li>
    <li><a href="register.html">Sign Up</a></li>
    </ul>-->
    <!--<div class="searchform">
      <form action="#">
        <p>
          <input name="search_query" class="textbox" type="text" placeholder="Search Our Site" />
          <input name="search" class="button" value="Search" type="submit" />
        </p>
      </form>
    </div>-->
  </div>
  <div id="content-wrap">
    <div id="sidebar" >
      <?php include 'sidebar.php'; ?>
      <!--<h1>Wise Words</h1>
      <p class="box">&quot;The happiest people are those who invested their time in others. The unhappiest people are those who
        wonder how the world is going to make them happy&quot;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;- John Maxwell</p>-->
      <!--<h1>Support Styleshout</h1>
      <p>If you are interested in supporting my work and would like to contribute, you are welcome to make a small donation
        through the <a href="http://www.styleshout.com/">donate link</a> on my website - it will be a great help and will surely
        be appreciated.</p>-->
    </div>
    <div id="main">
      <div class="box" style="padding-bottom: 75px;">
        <h1>Start Your Trivia Journey</h1>
        <p>
          Become the master of your domain and defy the realms of knowledge with - and against - other <strong>TriviaWorld</strong>
          players from all around the - well - world (pun intended)!  Answer questions, play games, earn badges, and become the
          world's best trivia guru!  You can do all this <strong>FOR FREE</strong>!
          </p>
          <div class="userform">
            <form action="#">
              <p>
                <img src="icons/pinkarrow.gif" alt="Smiley Pointing Arrow GIF" class="pinkarrow"><input name="username_query" class="textbox" type="text" placeholder="Select a Username" />
                <input name="start" class="button" value="GO!" type="submit" />
              </p>
            </form>
            </div>
          <!--Become a Gold Member for an ad-free experience and tons of perks!-->
        <!--<h1>Template <span class="gray">Info</span></h1>
        <p><strong>Azulmedia 2.1</strong> is a free, W3C-compliant, CSS-based website template by <strong><a href="http://www.styleshout.com/">styleshout.com</a></strong>. This work is distributed under the <a rel="license" href="http://creativecommons.org/licenses/by/2.5/"> Creative Commons Attribution 2.5 License</a>, which means that you are free to use and modify it for any purpose. All I ask is that you include a link back to <a href="http://www.styleshout.com/">my website</a> in your credits.</p>
        <p>For more free designs, you can visit <a href="http://www.styleshout.com/">my website</a> to see my other works.</p>
        <p>Good luck and I hope you find my free templates useful!</p>
        <p class="comments align-right"> <a href="#">Read more</a> : <a href="#">Comments(7)</a> : Oct 28, 2006 </p>-->
      </div>
      <div class="box" style="padding-bottom: 750px;">
        <h1>
          <center>
            GameZone
          </center>
        </h1>
        <div class="float-left">
        <h1>Daily Games</h1>
          <p><a href="quizoftheday.php">Quiz of the Day</a><br />
          Your daily quiz full of random trivia</p>
          <p><a href="fillmein.php">Fill Me In</a><br />
          Your daily dose of fill in the blank fun</p>
          <p><a href="guesswho.php">Guess Who?</a><br />
          Guess a celebrity, historical figure, or fictional character based on clues</p>
          <p><a href="thepiratesbooty.php">The Pirate's Booty</a><br />
          One person per day gets the booty at random after they answer one question</p>
          <p><a href="storytime.php">Story Time</a><br />
          A story will be told and you must guess what the story is about each day</p>
          <p><a href="sweettooth.php">Sweet Tooth</a><br />
          Too much candy is bad for your teeth, but a daily quiz on sweets is not</p>
          <p><a href="monstermania.php">Monster Mania</a><br />
          A horrifying daily quiz on monsters and all things horror</p>
          <p><a href="hardasarock.php">Hard As a Rock</a><br />
          Your daily quiz that will test your knowledge with really hard questions</p>
          <p><a href="smarter.php">Are You Smarter Than a 5th Grader?</a><br />
          Answer two questions from 1st to 5th grade of random categories to see if you are<br />smarter than a 5th grader</p>
          <p><a href="worldtraveler.php">Hard As a Rock</a><br />
          Travel to each country by completing daily quizzes, each day being a new country</p>
          <p><a href="oddjobs.php">Odd Jobs</a><br />
          Every day, you'll complete a daily quiz all about a specific job</p>
          <p><a href="mindgames.php">Mind Games</a><br />
          Use your brain power to conquer the daily mind games of brain teasing questions</p>
        </div>
        <div class="float-right">
        <h1>Hourly Games</h1>
          <p><a href="quizofthehour.php">Quiz of the Hour</a><br />
          Each hour on the hour will give you random trivia questions to answer</p>
          <p><a href="psychicreading.php">Psychic Reading</a><br />
          Mindless Word Lottery, so come and test your luck each hour</p>
          <p><a href="sevenminutesinheaven.php">7 Minutes in Heaven</a><br />
          An hourly quiz with a timer of easy trivia, the fastest player wins</p>
          <p><a href="sixtyminutesinhell.php">60 Minutes in Hell</a><br />
          An hourly quiz with a timer of hard trivia, the fastest player wins</p>
          <p><a href="theriddler.php">The Riddler</a><br />
          An hourly dose of riddles and rhymes will test you knowledge and your mind</p>
          <p><a href="trademarks.php">Trademarks</a><br />
          Each hour will test your skills on trademarks and copyrights</p>
          <p><a href="songbird.php">Song Bird</a><br />
          Finish each lyrics every hour to see if you are truly a song bird</p>
          <p><a href="pieceofcake.php">Piece of Cake</a><br />
          Hourly quizzes that will test your knowledge with super easy questions</p>
          <p><a href="thisorthat.php">This or That</a><br />
          You have to choose whether it is one thing or another every hour, easy huh?</p>
          <p><a href="trueorfalse.php">True or False</a><br />
          Every hour you can take a quiz that only features true or false questions</p>
          <p><a href="hiddenword.php">Hidden Word</a><br />
          Fill in the blanks to complete the sentences and take the special letters<br />of each word to create a hidden word</p>
          <p><a href="thelottery.php">The Lottery</a><br />
          Each hour, you pick a number to see if you hit the lottery and win a badge</p>
        </div>
      </div>
    </div>
    <div class="box" style="margin-top:  -140px; padding-bottom: 185px;">
      <h1>
        <center>
          Weekly Games
        </center>
      </h1>
      <div class="float-left">
        <p><a href="fiftytwoweeks.php">52 Weeks</a><br />
        A weekly quiz with random categories that, if played each week for a year, earns you a badge</p>
        <p><a href="fastandfurious.php">Fast and Furious</a><br />
        Every Friday, the quickest player to finish a quiz with the most correct answers wins</p>
        <p><a href="finalboss.php">Final Boss</a><br />
          A quiz with the hardest questions on the site that resets weekly</p>
      </div>
      <div class="float-right">
        <p><a href="knockout.php">Knockout</a><br />
        Every week, players play the knockout challenge and by the week's end, the highest scorer wins</p>
        <p><a href="quizoftheweek.php">Quiz of the Week</a><br />
        Play the quiz of the week, which changes on a weekly basis!</p>
        <p><a href="weeklywinner.php">The Hunter</a><br />
        Locate and play the lucky quiz, scoring at least 6 right answers, to win a badge</p>
      </div>
    </div>
    <div class="box" style="padding-bottom:  185px;">
      <h1>
        <center>
          Scavenger Hunts
        </center>
      </h1>
      <div class="float-left">
        <p><a href="buriedtreasure.php">Buried Treasure</a><br />
        Use the clues that update daily to locate the buried treasure on the site</p>
        <p><a href="buzzybee.php">Buzzy Bee</a><br />
        Locate the bumblebee in one of the site's quizzes to earn a badge</p>
        <p><a href="crystalball.php">Crystal Ball</a><br />
        On random pages of the site has riddles to lead you to the mystical crystal ball</p>
      </div>
      <div class="float-right">
        <p><a href="flowerpower.php">Flower Power</a><br />
        Keep an eye out for where the magical flower has grown</p>
        <p><a href="sweeterthanhoney.php">Sweeter Than Honey</a><br />
        The honey jar will randomly pop up on any page of the site, click it and get the badge</p>
        <p><a href="thehunter.php">The Hunter</a><br />
        Locate and play the lucky quiz, scoring at least 6 right answers, to win a badge</p>
      </div>
    </div>
  </div>
</div>
<div id="footer-wrap">
  <div class="footer-left">
    <p class="align-left"> &copy; 2024 <strong>TriviaWorld</strong> | Developed and Designed by Scotty McCoy
  </div>
  <div class="footer-right">
    <p class="align-right"> <a href="terms.html">Terms of Service</a>&nbsp;|
      <a href="privacy.html">Privacy Policy</a>&nbsp;|
      <a href="cookie.html">Cookie Policy</a>&nbsp;|
      <a href="cheating.html">Cheating Policy</a></p>
  </div>
</div>
</body>
</html>
