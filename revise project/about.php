<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/about-style.css" />
    <title>About Us | J's Photography</title>
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
          <div class="gallery"><a href="gallery.php" class="link gallery">Gallery</a></div>
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
            <div class="home2"><a href="home.php" class="link2">Home</a></div>
            <div class="dashboard2"><a href="dashboard.php" class="link2">Dashboard</a></div>
            <div class="gallery2"><a href="about.php" class="link2">Gallery</a></div>
            <div class="contact2"><a href="contact.php" class="link2">Contact</a></div>
          </div>
        </nav>

        <!--showcase container-->
        <div class="showcase">
          <div class="tagline">
            <div class="tagline-text">
              <div class="company">
                <h1 class="about-header">
                  Locking Your Memory <br />
                  Through Photography
                </h1>
              </div>
              <h4 style="font-family: Poppins; font-weight: 500">
                Great People Behind the Lenses
              </h4>
              <h5 style="font-family: Poppins; font-weight: 600">Est: 2019</h5>
            </div>
            
          </div>

          <div class="nav-about"> 
            <button class="aboutbtn">
             <a href="#go-to-owner" class="about-link">Our Owner</a>
            </button>
            <button class="aboutbtn">
             <a href="#go-to-team" class="about-link">Our Team</a>
            </button>
            <button class="aboutbtn">
              <a href="#go-to-journey" class="about-link">Our Journey</a>
             </button>
             <button class="aboutbtn">
              <a href="#go-to-mvo" class="about-link">Our Objectives</a>
             </button>
        </div>
         
        <!--introduction-->
        <div id="go-to-owner"></div>
        <div class="introduction" >
          <div class="intro-photo">
            <img src="image/owner.avif" class="owner-img" />
          </div>
          <div class="intro-text">
            <div class="intro-header">Our Owner</div>
            <div class="intro-body">
              Joshua Sarmiento Guintu, the founder of J’SPHOTOGRAPHY, is a graduate 
              of Industrial Engineering with a strong passion for photography that began 
              during high school. As a student, he served as the president of the school's 
              photography club, where he honed the creative and technical skills that 
              would later become the foundation of a professional career. <br><br>
              Although he pursued a degree in Industrial Engineering, his passion for 
              visual storytelling remained constant. This passion ultimately inspired the 
              establishment of a photo and video services business that combines 
              artistic vision with the precision and problem-solving mindset developed 
              through his engineering background. <br><br>
              Today, Joshua S. Guintu together with his wife, Arianne Joyce R. Guintu 
              leads J’SPHOTOGRAPHY with a commitment to delivering high-quality, 
              creative, and memorable visual content. The business stands as a 
              testament to the idea that pursuing one’s passion—backed by dedication 
              and professional excellence—can lead to meaningful and fulfilling work.
              
            </div>
          </div>
        </div>

        <!--team container-->
        
        <div class="team">
          <div class="team-header" id="go-to-team">Our Team</div>
          <div class="members">
            <div class="member1">
              
              <div><div class="member-name">Joshua S. Guintu </div>
              <div class="member-pos">Position: Founder, <br>Main Photographer, Photo Editor</div>
            </div>
            <div class="profile-container1"><img src="image/owner.avif" class="member-owner" /></div>
            </div>
            <div class="member2">
                <div class="profile-container2"><img src="image/co-founder.avif" class="member-cofounder" /></div>
                <div><div class="member-name">Arianne Joyce R. Guintu  </div>
                <div class="member-pos">Position: Social media manager<br>.</div>
              </div>
              </div>
            </div>
          </div>
        
        <!--journey container-->
        
        <div class="journey" >     
          <div id="go-to-journey"></div>       
          <div class="journey-container">
            <div class="journey-header">Our Journey</div>
              <div id="go-to-journey"></div>          
              <div class="stories-body">
              <div class="stories-1">
              <div class="stories-title1">How It All Started </div>
              <div class="stories-text1">Our story began with a passion that took root in high school—photography. Our founder, a former photography club 
                president, found joy in capturing meaningful moments and telling stories through the lens. Though he pursued a 
                degree in Industrial Engineering, the creative spark never faded. After graduation, this passion evolved into a full
                fledged photo and video services business—one built on creativity, dedication, and a desire to turn special 
                moments into lasting memories. </div>
            </div>
            <div class="stories-2">
              <div class="stories-title2">Challenges Encountered </div>
              <div class="stories-text2">As with many startups, the early stages were filled with challenges: limited resources, stiff competition, and the 
                task of building a nsame in a saturated market. Establishing trust with clients, managing operations, and 
                maintaining quality with minimal manpower were just a few of the obstacles we faced.</div>
            </div>
            <div class="stories-3">
              <div class="stories-title3"> Overcoming Problems and Turning Them into Opportunities</div>
              <div class="stories-text3">We took each challenge as an opportunity for growth. By reinvesting in training, equipment, and continuously 
                improving our skills, we were able to raise the quality of our services. Our background in Industrial Engineering 
                helped streamline business processes, while the involvement of our co-owner—who is also a teacher—greatly 
                contributed to managing client communications, schedules, and logistics with care and professionalism. Her 
                people skills and organized approach have been invaluable in building client trust and satisfaction. Over time, our 
                clients became our best promoters—many of them returning for repeat services and referring friends and family to 
                us. Their loyalty and feedback have been central to our growth.</div>
            </div>
            <div class="stories-4">
              <div class="stories-title4"> Achievements </div>
              <div class="stories-text4">We’ve been honored to capture hundreds of events, from intimate celebrations to large gatherings. Our consistent 
                service quality and attention to detail have earned us a strong reputation and a growing network of repeat clients 
                and referrals. We’ve expanded our team, improved our workflow, and built lasting relationships with families, 
                brands, and organizations who trust us to document their most important moments.</div>
            </div>
            <div class="stories-5">
              <div class="stories-title5">Future Goals</div>
              <div class="stories-text5">Looking ahead, we aim to continue expanding our services, explore new creative formats, and open a dedicated 
                studio space. We envision growing into a trusted household name in photo and video services—anchored by our 
                passion for storytelling and strengthened by the trust and love of our clients. Our mission remains the same: to 
                turn moments into memories, and to make every client feel seen, celebrated, and valued. </div>
            </div>
            <div class="read-hide-container"> 
            <button class="journey-read" onclick="toggleRead()">Read Stories</button>
            <button class="journey-hide" onclick="toggleHide()">Shrink</button>
          </div>
            </div>
        </div>


         <!--business-profile container-->
          
         <div class="profile">
          <div id="go-to-mvo"></div>
            <div class="mission">
              <div class="mission-header">OUR MISSION</div>
              <div class="mission-body">To provide high-quality, heartfelt photo 
                and video services that capture life’s most meaningful moments with 
                creativity, professionalism, and care. We are committed to turning 
                stories into lasting memories while delivering 
                exceptional service that keeps clients coming back and sharing their 
                experiences with others.</div>
            </div>
            <div class="vision">
              <div class="vision-header">OUR VISION</div>
              <div class="vision-body">To become one of the most trusted and 
                recommended photo and video service providers in the country—
                recognized for our passion, consistency, and genuine connection with
                 every client we serve. We aim to grow as a 
               family-run business that brings joy, artistry, and excellence to every
                project we undertake.</div>
            </div>
            <div class="values">
              <div class="values-header">OUR VALUES</div>
              <div class="values-body">
                <div class="values-1">
                  <div  class="value-image1"><img src="image/passion.avif" class="value-class-image1"></div>
                  <div class="value-title1">Passion</div>
                  <div class="value-text1">We are driven by a love for photography and storytelling. Every project we take on is approached with heart and 
                    purpose.</div>
                </div>
                <div class="values-2">
                  <div  class="value-image"><img src="image/excellence.avif" class="value-class-image2"></div>
                  <div class="value-title2">Excellence</div>
                  <div class="value-text2">We strive to deliver the highest quality of work through constant learning, attention to detail, and a commitment to improvement.</div>
                </div>
                <div class="values-3">
                  <div  class="value-image"><img src="image/integrity.avif" class="value-class-image3"></div>
                  <div class="value-title3">Integrity</div>
                  <div class="value-text3">We value honesty, transparency, and reliability in everything we do—from communication to final delivery.</div>
                </div>
                <div class="values-4">
                  <div  class="value-image"><img src="image/client.avif" class="value-class-image4"></div>
                  <div class="value-title4"> Client-Centered Service </div>
                  <div class="value-text4">We build lasting relationships by listening to our clients, understanding their needs, and exceeding their expectations.</div>
                </div>
                <div class="values-5">
                  <div  class="value-image"><img src="image/family.avif" class="value-class-image5"></div>
                  <div class="value-title5">Family and Teamwork</div>
                  <div class="value-text5">As a family-run business, we believe in collaboration, mutual support, and working together to make each project successful. </div>
                </div>
                <div class="values-6">
                  <div  class="value-image"><img src="image/creativity.avif" class="value-class-image6"></div>
                  <div class="value-title6">Creativity</div>
                  <div class="value-text6">We bring fresh ideas and artistic vision to every shoot, making each output unique and personal.</div>
                </div>
              </div>
            </div>
         </div>

        <!--footer container-->
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

    <script src="Javascript/about-script.js"></script>
  </body>
</html>
