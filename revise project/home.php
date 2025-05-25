<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/home-style.css" />
    <title>Home Page | J's Photography</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Lekton:ital,wght@0,400;0,700;1,400&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    </style>
  </head>
  <body>
    <!--Main Container-->
    <div class="main">
      <!--sidebar-->
      <aside class="sidenav">
        <div class="socials">
          <a href="https://www.facebook.com/JsgPh" target="_blank"
            ><img src="image/fb.png"
          /></a>
          <a href="https://www.instagram.com/" target="_blank"
            ><img src="image/ig.png"
          /></a>
          <a href="https://x.com/home" target="_blank"
            ><img src="image/x.png"
          /></a>
        </div>
        <div class="visit-container">
          <h1 class="visit-text">VISIT US &nbsp;&nbsp;</h1>
        </div>
        <div class="user-prof-icon">
          <a href="user-profile.php"><img src="image/user.png" /></a>
        </div>
        <div class="audit-trail-icon">
          <a href="audit-trail.php"><img src="image/audit.png" /></a>
        </div>
        <div class="settings">
          <a href="settings.php"><img src="image/settingslogo.png" /></a>
        </div>
      </aside>

      <!--right container-->
      <section class="right-body">
        <!--top-->
        <div id="top"></div>
        <!--navigation container-->
        <nav class="navigation">
          <div class="identity">
            <img src="image/logo.png" class="nav_logo" />
            <h6 class="nav_companyname">J's Photography</h6>
          </div>
          <div class="burgermenu">
            <img
              src="image/hamburgermenu.png"
              class="burgermen"
              onclick="
            toggleDim();
            toggleNav();
            "
            />
          </div>
          <div class="home">
            <a href="home.php" class="link home">Home</a>
          </div>
          <div class="dashboard">
            <a href="dashboard.php" class="link home">Dashboard</a>
          </div>
          <div class="gallery">
            <a href="gallery.php" class="link gallery">Gallery</a>
          </div>
          <div class="about">
            <a href="about.php" class="link about">About</a>
          </div>
          <div class="contact">
            <a href="contact.php" class="link contact">Contact</a>
          </div>
        </nav>

        <!--nav overlay-->
        <nav class="nav-overlay">
          <div class="nav-header">
            <img src="image/logo.png" class="nav_logo2" />
            <h6 class="nav_companyname2">J's Photography</h6>
            <button
              class="close-btn3"
              onclick="
            toggleNavClose()
            toggleLit()"
            >
              ×
            </button>
          </div>
          <div class="nav-body">
            <div class="dashboard2">
              <a href="dashboard.php" class="link2">Dashboard</a>
            </div>
            <div class="gallery2">
              <a href="gallery.php" class="link2">Gallery</a>
            </div>
            <div class="about2">
              <a href="about.php" class="link2">About</a>
            </div>
            <div class="contact2">
              <a href="contact.php" class="link2">Contact</a>
            </div>
          </div>
        </nav>

        <!--showcase container-->
        <div class="showcase">
          <div class="tagline">
            <div class="tagline-text">
              <div class="company">
                <img src="image/logo.png" class="logo" />
                <h1 class="company-name">J's Photography</h1>
              </div>
              <h4 style="font-family: Poppins; font-weight: 600">
                Capture Every Moment
              </h4>
              <h5 style="font-family: Poppins; font-weight: 600">Est: 2019</h5>
            </div>
          </div>

          <!-- carousel-->

          <div class="carousel">
            <div class="carousel-header">Covering Every Occasions</div>
            <div class="banner">
              <div
                class="item item1"
                onclick="
                num=1;
                change(num)
                "
              >
                <img src="image/1.jpg " />
                <span>Birthdays</span>
              </div>
              <div
                class="item item2"
                onclick="
                num=2;
                change(num)
                "
              >
                <img src="image/2.jpg " />
                <span>Christening</span>
              </div>
              <div
                class="item item3"
                onclick="
                num=3;
                change(num)
                "
              >
                <img src="image/3.jpg " />
                <span>Wedding</span>
              </div>
              <div
                class="item item4"
                onclick="
                num=4;
                change(num)
                "
              >
                <img src="image/4.jpg " />
                <span>Prenuptial</span>
              </div>
              <div
                class="item item5"
                onclick="
                num=5;
                change(num)
                "
              >
                <img src="image/5.jpg " />
                <span>Graduation</span>
              </div>
              <div
                class="item item6"
                onclick="
                num=6;
                change(num)
               "
              >
                <img src="image/6.jpg " />
                <span>Special Events</span>
              </div>
            </div>
          </div>
        </div>

        <!--introduction-->
        <div class="introduction">
          <div class="intro-photo">
            <img src="image/cam.png" class="camera" />
          </div>
          <div class="intro-text">
            <div class="intro-header">What is J's Photography?</div>
            <div class="intro-body">
              J's Photography is a photography and video service based in San
              Fernando, Pampang. We captures life's most meaningful moments
              through high quality photos and cinematic videos. With passion and
              creativity, we unfolds your story and produces exceptional works
              that turns your big and small celebrations into a lasting
              masterpiece. J's Photography offers variety of services for your
              weddings, birthdays, events, special occasions, and more.
              <div class="intro-nav">
                <a href="about.php" class="intro-about">About</a>
              </div>
            </div>
          </div>
        </div>

        <!--Popover-->
        <div class="popover-wrapper">
          <div class="bronze-pop">
            <div class="l-pop">
              <img src="image/pop-image.avif" class="pop-image" />
            </div>
            <div class="r-pop">
              <div class="row-pop1">
                <div class="pop-header">
                  <div class="header-text" id="bronze-header">
                    <div class="header-title">Bronze Package</div>
                    <div class="header-price">₱2,000</div>
                  </div>
                  <div class="header-close">
                    <button
                      class="close-btn2"
                      onclick="
                  pack_num_close = 1;
                  showless(pack_num_close);
                  "
                    >
                      ×
                    </button>
                  </div>
                </div>
              </div>
              <div class="row-pop2">
                ● With Stylish <br />
                ● Make-up <br />
              </div>
              <div class="row-pop3">
                <button class="book">
                  <a href="contact.php" class="book-link">Book →</a>
                </button>
              </div>
            </div>
          </div>
          <div class="silver-pop">
            <div class="l-pop">
              <img src="image/pop-image.avif" class="pop-image" />
            </div>
            <div class="r-pop">
              <div class="row-pop1">
                <div class="pop-header">
                  <div class="header-text" id="silver-header">
                    <div class="header-title">Silver Package</div>
                    <div class="header-price">₱3,500</div>
                  </div>
                  <div class="header-close">
                    <button
                      class="close-btn2"
                      onclick="
                pack_num_close = 2;
                showless(pack_num_close);
                "
                    >
                      ×
                    </button>
                  </div>
                </div>
              </div>
              <div class="row-pop2">
                ● With Stylish <br />
                ● Make-up <br />
                ● Pictorial <br />
                ● Video Production <br />
                ● Venue Creation/Design <br />
              </div>
              <div class="row-pop3">
                <button class="book">
                  <a href="contact.php" class="book-link">Book →</a>
                </button>
              </div>
            </div>
          </div>
          <div class="gold-pop">
            <div class="l-pop">
              <img src="image/pop-image.avif" class="pop-image" />
            </div>
            <div class="r-pop">
              <div class="row-pop1">
                <div class="pop-header">
                  <div class="header-text" id="gold-header">
                    <div class="header-title">Gold Package</div>
                    <div class="header-price">₱6,000</div>
                  </div>
                  <div class="header-close">
                    <button
                      class="close-btn2"
                      onclick="
                  pack_num_close = 3;
                  showless(pack_num_close);
                  "
                    >
                      ×
                    </button>
                  </div>
                </div>
              </div>
              <div class="row-pop2">
                ● With Stylish <br />
                ● Make-up <br />
                ● Pictorial <br />
                ● PhotoBooth <br />
                ● Video Production <br />
                ● Venue Creation/Design <br />
              </div>
              <div class="row-pop3">
                <button class="book">
                  <a href="contact.php" class="book-link">Book →</a>
                </button>
              </div>
            </div>
          </div>
          <div class="diamond-pop">
            <div class="l-pop">
              <img src="image/pop-image.avif" class="pop-image" />
            </div>
            <div class="r-pop">
              <div class="row-pop1">
                <div class="pop-header">
                  <div class="header-text" id="diamond-header">
                    <div class="header-title">Diamond Package</div>
                    <div class="header-price">₱10,000</div>
                  </div>
                  <div class="header-close">
                    <button
                      class="close-btn2"
                      onclick="
                pack_num_close = 4;
                showless(pack_num_close);
                "
                    >
                      ×
                    </button>
                  </div>
                </div>
              </div>
              <div class="row-pop2">
                ● With Stylish <br />
                ● Make-up <br />
                ● Pictorial <br />
                ● PhotoBooth <br />
                ● Video Production <br />
                ● Venue Creation/Design <br />
                ● Program Preparation
              </div>
              <div class="row-pop3">
                <button class="book">
                  <a href="contact.php" class="book-link">Book →</a>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!--package container-->
        <div class="package" id="package">
          <img src="image/box1.png" class="box1" />
          <div class="package-header">Select Your Package Deal</div>
          <div class="packages">
            <div class="package1">
              <div class="package-type1">Bronze Package</div>
              <div>
                <img src="image/packagelogo.png" class="package-logo" />
              </div>
              <div class="package-price1">
                ₱2,000
                <span class="subprice">/ negotiable price</span>
              </div>
              <div>
                <button
                  class="seemore"
                  onclick="
                pack_num = 1;
                showmore(pack_num);
                "
                >
                  See More
                </button>
              </div>
            </div>
            <div class="package2">
              <div class="package-type2">Silver Package</div>
              <div>
                <img src="image/packagelogo.png" class="package-logo" />
              </div>
              <div class="package-price2">
                ₱3,500
                <span class="subprice">/ negotiable price</span>
              </div>
              <div>
                <button
                  class="seemore"
                  onclick="
                pack_num = 2;
                showmore(pack_num);
                "
                >
                  See More
                </button>
              </div>
            </div>
            <div class="package3">
              <div class="package-type3">Gold Package</div>
              <div>
                <img src="image/packagelogo.png" class="package-logo" />
              </div>
              <div class="package-price3">
                ₱6,000
                <span class="subprice"> / negotiable price</span>
              </div>
              <div>
                <button
                  class="seemore"
                  onclick="
                pack_num = 3;
                showmore(pack_num);
                "
                >
                  See More
                </button>
              </div>
            </div>
            <div class="package4">
              <div class="package-type4">Diamond Package</div>
              <div>
                <img src="image/packagelogo.png" class="package-logo" />
              </div>
              <div class="package-price4">
                ₱10,000
                <span class="subprice">/ negotiable price</span>
              </div>
              <div>
                <button
                  class="seemore"
                  onclick="
                  pack_num = 4;
                  showmore(pack_num);
                  "
                >
                  See More
                </button>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="footnote">
            <div>@2025 All rights reserved</div>
            <div>Designed by D-Creatives</div>
          </div>
        </footer>
      </section>
    </div>
    <button class="botbutton" onclick="toggleChat()">
      <img src="image/chat-alert1.avif" class="bot-alert1" />
      <img src="image/chat-alert2.avif" class="bot-alert2" />
      <img src="image/botpic.png" class="botpic" />
    </button>

    <!-- Bot Chat Panel QR CODE STILL MISSING LINK-->
    <div class="chat-panel" id="chatPanel">
      <div class="chat-header">
        <h3 class="jbot">J’Bot</h3>
        <button class="close-btn" onclick="toggleChat()">×</button>
      </div>
      <div class="chat-content">
        <div class="bot-message">
          <img src="image/botpic.png" alt="Bot" class="bot-icon" />
          <div class="message-bubble">
            Good Day! How may I be of service?
            <div class="bot-options">
              <button
                onclick="addUserMessage('Book an appointment'); addBotReplyWithLink('Sure! You can proceed by clicking the link below:', 'Go to appointment page', 'contact.php');"
              >
                &#8226; Book an appointment
              </button>

              <button
                onclick="addUserMessage('Visit Facebook Page'); addBotReplyWithLink('Click the link below to visit our Facebook Page:', 'Facebook page', 'https://www.facebook.com/JsgPh');"
              >
                &#8226; Visit Facebook Page
              </button>

              <button
                onclick="addUserMessage('Check available packages'); addBotReplyWithLink('Click the message below to check our available packages:', 'Packages', '#packages');"
              >
                &#8226; Check out the package offers
              </button>

              <button
                onclick="addUserMessage('Generate a QR code copy of the pictures'); addBotReplyWithLink('Click the link below to access your photos:', 'QR Code', ' ');"
              >
                &#8226; Generate a QR code copy of the pictures
              </button>

              <button
                onclick="addUserMessage('Report a problem/issue'); addBotReplyWithLink('Here is the link where you can report your problems:', 'Report Issue', 'https://www.facebook.com/messages/t/373469663221561');"
              >
                &#8226; Report a problem/issue
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Overlay for the ChatBot-->
    <div class="overlay" id="chatOverlay" onclick="toggleChat()"></div>
    <!-- Overlay for the Package-->
    <div class="overlay2"></div>

    <script src="Javascript/home-script.js"></script>
  </body>
</html>