<?php include('contactform.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./app/scss/style.css">
  <!-- Bootstrap CSS -->
  <!-- <link rel="icon" type="image/png" sizes="56x56" href="img/glaciericon.jpg"> -->
  <link rel="icon" type="image/png" sizes="56x56" href="img/DSIconRed.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>RSVP</title>
</head>

<body>
  <header class="header">
    <div class="overlay has-fade"></div>
    <nav class="container container--pall flex flex-jc-sb flex-ai-c">
      <a id="btnHamburger1" href="#" class="header__toggle hide-for-desktop">
        <span></span>
        <span></span>
        <span></span>
      </a>
      <div class="header__links hide-for-mobile">
        <a href="./index.html">Home</a>
        <a href="./rsvp.html">RSVP</a>
        <a href="./photos.html">Photos</a>
        <a href="./index.html#schedule">Schedule</a>
        <a href="./index.html#hotel">Hotel</a>
        <a href="./map.html">Map</a>
        <a href="./vendors.html">Vendors</a>

      </div>

    </nav>

    <div class="header__menu has-fade">
      <a href="./index.html">Home</a>
      <a href="./rsvp.html">RSVP</a>
      <a href="./photos.html">Photos</a>
      <a href="./map.html">Map</a>
      <a href="./vendors.html">Vendors</a>

    </div>
  </header>

  <div class="rsvp_body">
    <b>
      <h1>RSVP</h1>
      <div class="rsvp_form">
        <form class="contact-form" action=<?= $_SERVER['PHP_SELF']; ?> method="post">
          <div class="form-group">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Glacier Zacharia" tabindex="1"
              required>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="reallygoodboy@email.com"
              tabindex="2" required>
          </div>
          <div class="form-group">
            <label for="subject" class="form-label">Subject (optional)</label>
            <input type="text" class="form-control" id="subject" name="subject"
              placeholder="I heard you're getting married..." tabindex="3">
          </div>
          <div class="form-group">
            <label for="message" class="form-label">Message (optional)</label>
            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="I'd love to come celebrate..."
              tabindex="4"></textarea>
          </div>
          <br>
          <label class="radio" for="guest">Are you bringing a guest?</label>
          <input class="radio" type="radio" name="plus-1" value="no" checked>No
          <input class="radio" type="radio" name="plus-1" value="yes">Yes

          <div>
            <button type="submit" name="submit" class="btn">Submit RSVP!</button>
          </div>
        </form>
      </div>
    </b>
  </div>



  <footer class="footer">
    <div class="container">
      <img src="/images/flowerfamily.JPEG" />
      <div class="footer__social">
        <a href="https://mobile.twitter.com/search?q=%23loveisEZ&src=typed_query">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18">
            <title>Twitter</title>
            <path fill="#1a6b0a"
              d="M20.667 2.797a8.192 8.192 0 01-2.357.646 4.11 4.11 0 001.804-2.27 8.22 8.22 0 01-2.606.996A4.096 4.096 0 0014.513.873c-2.649 0-4.595 2.472-3.997 5.038a11.648 11.648 0 01-8.457-4.287 4.109 4.109 0 001.27 5.478A4.086 4.086 0 011.47 6.59c-.045 1.901 1.317 3.68 3.29 4.075a4.113 4.113 0 01-1.853.07 4.106 4.106 0 003.834 2.85 8.25 8.25 0 01-6.075 1.7 11.616 11.616 0 006.29 1.843c7.618 0 11.922-6.434 11.662-12.205a8.354 8.354 0 002.048-2.124z" />
          </svg>
        </a>
        <a href="https://www.instagram.com/explore/tags/loveisez/">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20">
            <title>Instagram</title>
            <path fill="#1a6b0a"
              d="M10.333 1.802c2.67 0 2.987.01 4.042.059 2.71.123 3.976 1.409 4.1 4.099.048 1.054.057 1.37.057 4.04 0 2.672-.01 2.988-.058 4.042-.124 2.687-1.386 3.975-4.099 4.099-1.055.048-1.37.058-4.042.058-2.67 0-2.986-.01-4.04-.058-2.717-.124-3.976-1.416-4.1-4.1-.048-1.054-.058-1.37-.058-4.041 0-2.67.01-2.986.058-4.04.124-2.69 1.387-3.977 4.1-4.1 1.054-.048 1.37-.058 4.04-.058zm0-1.802C7.618 0 7.278.012 6.211.06 2.579.227.56 2.242.394 5.877.345 6.944.334 7.284.334 10s.011 3.057.06 4.123c.166 3.632 2.181 5.65 5.816 5.817 1.068.048 1.408.06 4.123.06 2.716 0 3.057-.012 4.124-.06 3.628-.167 5.651-2.182 5.816-5.817.049-1.066.06-1.407.06-4.123s-.011-3.056-.06-4.122C20.11 2.249 18.093.228 14.458.06 13.39.01 13.049 0 10.333 0zm0 4.865a5.135 5.135 0 100 10.27 5.135 5.135 0 000-10.27zm0 8.468a3.333 3.333 0 110-6.666 3.333 3.333 0 010 6.666zm5.339-9.87a1.2 1.2 0 10-.001 2.4 1.2 1.2 0 000-2.4z" />
          </svg>
        </a>
      </div>
      <div class="footer__links col1">
        <p>Ellen and Eric Zacharia</p>
        <p>(774) 239-5342</p>
        <p>ellenandericwedding@gmail.com</p>
      </div>
    </div>
  </footer>
  <script src="/app/js/script.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>

</body>

</html>