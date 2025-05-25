<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/contact-style.css" />
    <title>Contact | J's Photography</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Lekton:ital,wght@0,400;0,700;1,400&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    </style>
  </head>

  <body>
    <div class="contact-page">
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

      <section class="contact-nav-body">
        <!--navigation container-->
        <div class="contact-navigation">
          <div class="company-logo-nav">
            <img src="image/logo.png" alt="Company Logo" />
            <h1>J's Photography</h1>
          </div>
          
          <nav class="urls-contact">
            <div class="home"><a href="home.php">Home</a></div>
            <div class="dashboard"><a href="dashboard.php">Dashboard</a></div>
            <div class="gallery"><a href="gallery.php">Gallery</a></div>
            <div class="about"><a href="about.php">About</a></div>
            <div class="contact"><a href="contact.php">Contact</a></div>
          </nav>
        </div>
      </section>

      <div class="contact-section">
        <!--Get In Touch Section-->
        <div class="get-in-touch-box">
          <div class="get-in-touch-box2">
            <h1>Get in T<span id="lens-png"></span>uch</h1>
            <div class="vertical-line"></div>
          </div>
          <div class="contact-info">
            <p>
              Email: jsphotography@gmail.com<br />
              <br />
              Phone: 123-456-7890<br />
              <br />
              We cannot wait to hear from you! <br />
              Look out in your inbox for a reply <br />
              from us within 1-3 business days.
            </p>
          </div>

          <div class="social-text"><h1>Our Socials</h1></div>
          <div class="vertical-line"></div>

          <div class="social-grid">
            <a href="https://facebook.com" target="_blank"
              ><img src="contact-imgs/facebook.png" alt="Facebook"
            /></a>
            <a href="https://messenger.com" target="_blank"
              ><img src="contact-imgs/messenger.png" alt="Messenger"
            /></a>
            <a href="https://instagram.com" target="_blank"
              ><img src="contact-imgs/instagram.png" alt="Instagram"
            /></a>
            <a href="https://tiktok.com" target="_blank"
              ><img src="contact-imgs/tiktok.png" alt="TikTok"
            /></a>

            <a href="https://twitter.com" target="_blank"
              ><img src="contact-imgs/twitter.png" alt="X/Twitter"
            /></a>
            <a href="https://youtube.com" target="_blank"
              ><img src="contact-imgs/youtube.png" alt="YouTube"
            /></a>
            <a href="https://pinterest.com" target="_blank"
              ><img src="contact-imgs/pinterest.png" alt="Pinterest"
            /></a>
            <a href="https://telegram.com" target="_blank"
              ><img src="contact-imgs/telegram.png" alt="Telegram"
            /></a>
          </div>
        </div>

        <!--Center to Right Contact Form Section-->
        <div class="right-contact-section">
          <div class="intro-text-contact-form">
            <h1>
              WANT TO
              <span id="SHOOT-text-format">SHOOT YOUR SPECIAL DAY?</span>
              CONNECT WITH US
              <br />
              USING THE FORM BELOW.
            </h1>
          </div>

          <!--Contact Form-->
          <div class="contact-form-box">
            <form class="contact-form" action="contact.php">
              <div class="form-row">
                <div class="form-fname">
                  <label for="fname">FULL NAME</label>
                  <input
                    type="text"
                    id="fname"
                    name="fname"
                    placeholder="Enter your full name."
                    required
                  />
                </div>

                <div class="form-email">
                  <label for="email">EMAIL</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email."
                    required
                  />
                </div>
              </div>

              <div class="form-row2">
                <div class="form-phonenum">
                  <label for="phonenum">PHONE NUMBER</label>
                  <input
                    type="tel"
                    id="phonenum"
                    name="phonenum"
                    placeholder="09XXXXXXXXX"
                    minlength="11"
                    maxlength="11"
                    required
                  />
                </div>

                <div class="form-shootdate">
                  <label for="shootdate">SHOOT DAY</label>
                  <input type="date" id="shootdate" name="shootdate" required />
                </div>
              </div>

              <div class="form-row3">
                <div class="form-type-package">
                  <label for="package"
                    >WHAT TYPE OF SESSION/PACKAGE ARE YOU INTERESTED IN?</label
                  >
                  <select id="package-type" name="package" required>
                    <option value="wedding">Wedding</option>
                    <option value="engagement">Engagement</option>
                    <option value="family">Family</option>
                    <option value="debut">Debut</option>
                    <option value="event">Event</option>
                  </select>
                </div>
              </div>

              <div class="form-row4">
                <div class="form-more-info">
                  <label for="moreInfo">Additional Information</label>
                  <textarea
                    id="moreInfo"
                    name="moreInfo"
                    placeholder="Write your thoughts and suggestions."
                  ></textarea>
                </div>
              </div>

              <div class="submit-button-container">
                <button
                  type="submit"
                  name="submit"
                  id="submit-button"
                  value="submit"
                >
                  SUBMIT
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>