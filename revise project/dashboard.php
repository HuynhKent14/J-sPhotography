<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/dash-style.css" />
    <title>Dashboard | J's Photography</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Lekton:ital,wght@0,400;0,700;1,400&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    </style>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
  google.charts.load('current', {'packages':['corechart', 'line']});
  google.charts.setOnLoadCallback(drawLineChart);
    google.charts.setOnLoadCallback(drawLineChart2);
  google.charts.setOnLoadCallback(drawPieChart);

  function drawLineChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('number', 'Year');
    data.addColumn('number', '6 Years');
   
  
    data.addRows([
      [19,  100 ],
      [20,  10],
      [21,  8],
      [22,  12],
      [23,  200],
      [24,  650],
      [25,  324]
    
    ]);

    var options = {
      title: 'Website Views',
      subtitle: 'for the past years',
      width: 550,
      height: 300
    };

    var chart = new google.charts.Line(document.getElementById('curve_chart'));
    chart.draw(data, google.charts.Line.convertOptions(options));
  }

    function drawLineChart2() {
    var data = new google.visualization.DataTable();
    data.addColumn('number', 'Year');
    data.addColumn('number', '3rd Week of May');
   
  
    data.addRows([
      [21,  10 ],
      [22,  0],
      [23,  2],
      [24,  4],
      [25,  0],
      [26,  0],
      [27,  24]
    
    ]);

    var options = {
      title: 'Daily Booking',
      width: 550,
      height: 300
    };

    var chart = new google.charts.Line(document.getElementById('curve_chart2'));
    chart.draw(data, google.charts.Line.convertOptions(options));
  }

  function drawPieChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Type');
    data.addColumn('number', 'Percent');
    data.addRows([
      ['Bronze', 2],
      ['Silver', 1],
      ['Gold', 1],
      ['Diamond', 1],
    ]);

    var options = {
      title: 'Availed Package',
      width: 430,
      height: 333
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>

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
            <a href="dashboard.php" class="link dash">Dashboard</a>
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
        <header class="showcase">
          <div class="tagline">
            <div class="tagline-text">
              <div class="company-dash">
                <h1 class="dash-header">Dashboard</h1>
              </div>
              <h4 style="font-family: Poppins; font-weight: 600">
                Business Performance Report
              </h4>
              <h5 style="font-family: Poppins; font-weight: 600">Est: 2019</h5>
              
            </div>
          </header>

          <section class="reports">
            <article class="report-summary">
              <div class="report-col1">
                <div class="report-header">Today's Booking</div>
                <div class="report-body">3 clients</div>
                <hr>
                <div class="report-stat"><span class="open">🟢 Booking Open</span> | <span class="close">🟤 Booking Close</span></div>
              </div>
              <div class="report-col2">
                <div class="report-header">Today's Sales</div>
                <div class="report-body">₱25,000</div></div>
              <div class="report-col3">
                <div class="report-header">Total Booking</div>
                <div class="report-body">1304 clients</div>
              </div>
              <div class="report-col4">
                <div class="report-header">Total Sales</div>
                <div class="report-body"> ₱2,637,004</div>
              </div>
            </article>
            <article class="report-graph">
              <div class="graph-col1" id="curve_chart" ></div>
              <div class="graph-col2" id="curve_chart2"></div>
              <div class="graph-col3" id="chart_div"></div>
            </article>
          </section>



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