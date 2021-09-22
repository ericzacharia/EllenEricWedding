<?php include('form_process.php'); ?>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="container">  
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./app/scss/style.css">
  <link rel="icon" type="image/png" sizes="56x56" href="img/DSIconRed.png">
  <title>She said yes lol</title>
  <script type="text/javascript" src="jquery-3.3.1.js"></script>
</head>

<body>
  <header class="header">
    <div class="overlay has-fade"></div>
    <nav class="container container--pall flex flex-jc-sb flex-ai-c">
      <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
        <span></span>
        <span></span>
        <span></span>
      </a>
      <div class="header__links hide-for-mobile">
        <a href="./index.html">Home</a>
        <a href="./rsvp.html">RSVP</a>
        <a href="./photos.html">Photos</a>
        <a href="#schedule">Schedule</a>
        <a href="#hotel">Hotel</a>
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

  <div class="hero">
    <div id="arrow-left" class="arrow"></div>
    <div id="slider">
      <div class="slide slide1">
        <div class="slide-content">
          <div class="hero_text">
            <span id="hero_EE">Ellen & Eric</span> <span id="hero_hashtag">#LoveMadeEZ</span>
          </div>
          <div id="wedding_invitation">
            <div class="invitation_border">
              <div class="invitation_grid">
                <ul style="list-style-type:none;">
                  <li>Wichita, Kansas</li>
                  <li>Saturday, April 30<sup>th</sup>, <big>2022</big></li>
                  <li>
                    <div class="countdown_content">
                      <div class="countdown1">beep boop beep boop</div>
                      <p>dys : hrs : mins : secs</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slide2">
        <div class="slide-content">
          <div class="hero_text">
            <span id="hero_EE">Ellen & Eric</span> <span id="hero_hashtag">#LoveMadeEZ</span>
          </div>
          <div id="wedding_invitation">
            <div class="invitation_border">
              <div class="invitation_grid">
                <ul style="list-style-type:none;">
                  <li>Wichita, Kansas</li>
                  <li>Saturday, April 30<sup>th</sup>, <big>2022</big></li>
                  <li>
                    <div class="countdown_content">
                      <div class="countdown2">beep boop beep boop</div>
                      <p>dys : hrs : mins : secs</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slide3">
        <div class="slide-content">
          <div class="hero_text">
            <span id="hero_EE">Ellen & Eric</span> <span id="hero_hashtag">#LoveMadeEZ</span>
          </div>
          <div id="wedding_invitation">
            <div class="invitation_border">
              <div class="invitation_grid">
                <ul style="list-style-type:none;">
                  <li>Wichita, Kansas</li>
                  <li>Saturday, April 30<sup>th</sup>, <big>2022</big></li>
                  <li>
                    <div class="countdown_content">
                      <div class="countdown3">beep boop beep boop</div>
                      <p>dys : hrs : mins : secs</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slide4">
        <div class="slide-content">
          <div class="hero_text">
            <span id="hero_EE">Ellen & Eric</span> <span id="hero_hashtag">#LoveMadeEZ</span>
          </div>
          <div id="wedding_invitation">
            <div class="invitation_border">
              <div class="invitation_grid">
                <ul style="list-style-type:none;">
                  <li>Wichita, Kansas</li>
                  <li>Saturday, April 30<sup>th</sup>, <big>2022</big></li>
                  <li>
                    <div class="countdown_content">
                      <div class="countdown4">beep boop beep boop</div>
                      <p>dys : hrs : mins : secs</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slide5">
        <div class="slide-content">
          <div class="hero_text">
            <span id="hero_EE">Ellen & Eric</span> <span id="hero_hashtag">#LoveMadeEZ</span>
          </div>
          <div id="wedding_invitation">
            <div class="invitation_border">
              <div class="invitation_grid">
                <ul style="list-style-type:none;">
                  <li>Wichita, Kansas</li>
                  <li>Saturday, April 30<sup>th</sup>, <big>2022</big></li>
                  <li>
                    <div class="countdown_content">
                      <div class="countdown5">beep boop beep boop</div>
                      <p>dys : hrs : mins : secs</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div id="arrow-right" class="arrow"></div>
  </div>

  <section class="registry">
    <div class="registry__content container container--pall">
      <div class="registry__intro">
        <h2>Registry</h2>
        <p>
          We're not registered anywhere just yet!
        </p>
      </div>
    </div>
  </section>

  <section class="schedules" id="schedule">

    <div class="schedule__content container container--pall">

      <h2>Schedule and Locations</h2>

      <div class="schedule__grid">

        <a href="https://www.flywichita.com/" class="schedule__item">
          <div class="schedule__image" style="background-image: url('./images/airport.jpg')"></div>
          <div class="schedule__text">
            <div class="schedule__title">Fly into Wichita Airport (ICT)</div>
            <div class="schedule__description">Wichita Airport is a short 15 minute drive from downtown Wichita.
              <br><br>
              Need an Uber or Lyft from the airport?
              <br>
              Exit the airport's single terminal, cross the street and walk left until
              you see Uber and Lyft signs. Drivers typically wait here to drive passengers. Initiate the service through
              the app for a ride to downtown for about $15-$20.
              <br><br>
              <b>Wichita Dwight D. Eisenhower National Airport
                <br> 2277 Eisenhower Airport Pkwy, Wichita, KS 67209
                <br> (316) 946-4700 </b>
            </div>
          </div>
        </a>

        <a href="https://www.hyatt.com/en-US/group-booking/WICRW/G-HEZA" class="schedule__item" id="hotel">
          <div class="schedule__image" style="background-image: url('./images/hyattregency.jpg')"></div>
          <div class="schedule__text">
            <div class="schedule__title">Book a Room at Hyatt Regency Wichita</div>
            <div class="schedule__description">CLICK HERE to book a room! We have blocked out rooms for a reduced rate
              at the Hyatt Regency Hotel, located 0.7 miles from the reception venue starting at $119/room. The rooms
              are held until April 8th.
              <br><br> The bride and groom will be staying at the Hyatt both Friday and Saturday night, and a farewell
              brunch will be hosted at the hotel Sunday morning.
              <br><br> <b> Hyatt Regency Wichita
                <br> 400 W Waterman St, Wichita, KS 67202
                <br> (316) 946-4700 </b>
            </div>
          </div>
        </a>

        <a href="https://georgesfrenchbistro.com/" class="schedule__item">
          <div class="schedule__image" style="background-image: url('./images/georgesbistro.jpg')"></div>
          <div class="schedule__text">
            <div class="schedule__title">Rehearsal Dinner at George's French Bistro</div>
            <div class="schedule__date">Friday, 5:00 &#8594; 9:00 pm</div>
            <div class="schedule__description">A Rehearsal dinner for those invited will be held at George's French
              Bistro. A shuttle may be available, pending availability, from the Hyatt Regency Hotel.
              <br><br> <b> George's French Bistro
                <br> 4618 E Central Ave #50, Wichita, KS 67208
                <br> 316-226-8862 </b>
            </div>
          </div>
        </a>

        <a href="https://blessedsacramentwichita.com/" class="schedule__item">
          <div class="schedule__image" style="background-image: url('./images/church.jpg')"></div>
          <div class="schedule__text">
            <div class="schedule__title">Ceremony at Blessed Sacrament</div>
            <div class="schedule__date">Saturday, 1:30 pm &#8594; 2:30 pm</div>
            <div class="schedule__description">
              <p>
                The Ceremony will be held at Blessed Sacrement Church. Wichita provides a free bus called "The Q" that
                travels between this church and downtown.
                The bus stop is located in front of the church.
                <br><br> <b>Blessed Sacrament Church
                  <br>124 N Roosevelt St, Wichita, KS 67208 <br> (316) 682-4557
                </b></p>
            </div>
          </div>
        </a>

        <a href="https://www.wichitatransit.org/QLine/Pages/default.aspx" class="schedule__item">
          <div class="schedule__image" style="background-image: url('./images/TheQ.jpg')"></div>
          <div class="schedule__text">
            <div class="schedule__title">The Q-line Bus for Transportation</div>
            <div class="schedule__description">
              Busses run approximately every 15 minutes, and cover a short circut of 3.3 miles. <br> Click here for
              more details about how to use the Q-Line bus.
            </div>
          </div>
        </a>

        <a href="https://www.thehudsonict.com/" class="schedule__item">
          <div class="schedule__image" style="background-image: url('./images/hudson.jpg')"></div>
          <div class="schedule__text">
            <div class="schedule__title">Reception at The Hudson</div>
            <div class="schedule__date">Saturday, 5:00 pm &#8594; 10:30 pm</div>
            <div class="schedule__description">The reception will be held at The Hudson in downtown Wichita. The Hudson
              is a walk away from
              the Hyatt Regency Hotel, as well as a multitude of brewery, bar, and nightclub options - however you
              choose to enjoy the remainder of your night.
              <b> <br><br>The Hudson
                <br> 508 S Commerce, Wichita, KS 67202
                <br> (316) 600-7930</b>
            </div>
          </div>
        </a>
        <a href="https://www.visitwichita.com/things-to-do/nightlife/?view=grid&sort=qualityScore&filter_regions%5B0%5D=5"
          class="schedule__item">
          <div class="schedule__image" style="background-image: url('./images/downtown.jpg')"></div>
          <div class="schedule__text">
            <div class="schedule__title">Nightlife in Downtown Wichita</div>
            <div class="schedule__date">Saturday, 10:30 pm+</div>
            <div class="schedule__description">Ask the bride and groom for suggestions, or CLICK HERE to be redirected
              to Wichita's nightlife website.
              <br> <br>All guests are also welcome to hang out at the lobby bar at the Hyatt Regency!
              <b> <br><br>Downtown Wichita
                <br>505 E Douglas Ave, Wichita, KS 67202
                <br> (316) 264-6005</b>
            </div>
          </div>
        </a>

        <a href="https://www.hyatt.com/en-US/hotel/kansas/hyatt-regency-wichita/wicrw/dining" class="schedule__item">
          <div class="schedule__image" style="background-image: url('/images/eggs.jpg')"></div>
          <div class="schedule__text">
            <div class="schedule__title">Farewell Brunch at Hyatt Regency Wichita</div>
            <div class="schedule__date">Sunday, 10:30 am &#8594; 12:00 pm</div>
            <div class="schedule__description">
              Join the bride and groom for a farewell brunch Sunday morning at Hyatt Regency Wichita!
              <br><br>
              <b> Hyatt Regency Wichita
                <br> 400 W Waterman St, Wichita, KS 67202
                <br> (316) 946-4700 </b></div>
          </div>
        </a>

      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">

      <img src="/images/flowerfamily.JPEG">


      <div class="footer__social">
        <a href="https://mobile.twitter.com/search?q=%23lovemadeEZ&src=typed_query">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18">
            <title>Twitter</title>
            <path fill="#1a6b0a"
              d="M20.667 2.797a8.192 8.192 0 01-2.357.646 4.11 4.11 0 001.804-2.27 8.22 8.22 0 01-2.606.996A4.096 4.096 0 0014.513.873c-2.649 0-4.595 2.472-3.997 5.038a11.648 11.648 0 01-8.457-4.287 4.109 4.109 0 001.27 5.478A4.086 4.086 0 011.47 6.59c-.045 1.901 1.317 3.68 3.29 4.075a4.113 4.113 0 01-1.853.07 4.106 4.106 0 003.834 2.85 8.25 8.25 0 01-6.075 1.7 11.616 11.616 0 006.29 1.843c7.618 0 11.922-6.434 11.662-12.205a8.354 8.354 0 002.048-2.124z" />
          </svg>
        </a>
        <a href="https://www.instagram.com/explore/tags/lovemadeez/">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20">
            <title>Instagram</title>
            <path fill="#1a6b0a"
              d="M10.333 1.802c2.67 0 2.987.01 4.042.059 2.71.123 3.976 1.409 4.1 4.099.048 1.054.057 1.37.057 4.04 0 2.672-.01 2.988-.058 4.042-.124 2.687-1.386 3.975-4.099 4.099-1.055.048-1.37.058-4.042.058-2.67 0-2.986-.01-4.04-.058-2.717-.124-3.976-1.416-4.1-4.1-.048-1.054-.058-1.37-.058-4.041 0-2.67.01-2.986.058-4.04.124-2.69 1.387-3.977 4.1-4.1 1.054-.048 1.37-.058 4.04-.058zm0-1.802C7.618 0 7.278.012 6.211.06 2.579.227.56 2.242.394 5.877.345 6.944.334 7.284.334 10s.011 3.057.06 4.123c.166 3.632 2.181 5.65 5.816 5.817 1.068.048 1.408.06 4.123.06 2.716 0 3.057-.012 4.124-.06 3.628-.167 5.651-2.182 5.816-5.817.049-1.066.06-1.407.06-4.123s-.011-3.056-.06-4.122C20.11 2.249 18.093.228 14.458.06 13.39.01 13.049 0 10.333 0zm0 4.865a5.135 5.135 0 100 10.27 5.135 5.135 0 000-10.27zm0 8.468a3.333 3.333 0 110-6.666 3.333 3.333 0 010 6.666zm5.339-9.87a1.2 1.2 0 10-.001 2.4 1.2 1.2 0 000-2.4z" />
          </svg>
        </a>
      </div>
      <div class="footer__links">
        <p>Ellen and Eric Zacharia</p>
        <p>(774) 239-5342</p>
        <p><a href="mailto:ellenandericwedding@gmail.com" class="contact_email">ellenandericwedding@gmail.com</a></p>
      </div>



    </div>
  </footer>

  <script src="/app/js/script.js"></script>
  <script src="/app/js/countdown.js"></script>
  <script src="/app/js/slider.js"></script>

</body>

</html> -->