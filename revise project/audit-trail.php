<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="CSS/audit-style.css">
        <title>Audit Trail | J's Photography</title>
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
            </section>

            <!--Main Content-->
            <div class="audit-trail-section">
                <div class="audit-box">
                <div class="audit-title">Audit Trail</div>
                <table class="audit-table">
                    <tr class="header-row">
                        <th>#</th>
                        <th>User ID</th>
                        <th>Date & Time</th>
                        <th>Username</th>
                        <th>Action</th>
                        <th>Remarks</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1001</td>
                        <td>2025-04-29 / 07:35:90</td>
                        <td>trncgamboa</td>
                        <td>Login</td>
                        <td>Successful</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1002</td>
                        <td>2025-05-23 / 06:23:12</td>
                        <td>lucy</td>
                        <td>Login</td>
                        <td>Successful</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>1003</td>
                        <td>2025-05-24 / 08:15:45</td>
                        <td>lenlen</td>
                        <td>Login</td>
                        <td>Successful</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>1004</td>
                        <td>2025-05-22 / 18:34:42</td>
                        <td>kenchu</td>
                        <td>Login</td>
                        <td>Successful</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>1005</td>
                        <td>2025-05-21 / 14:58:23</td>
                        <td>gab</td>
                        <td>Login</td>
                        <td>Successful</td>
                    </tr>
                </table>
                
                <form action="audit-trail.php" target="_self" class="audit-footer">
                    <div class="update">Last update as of 2025-05-24 | 8:15 am</div>
                    <button type="submit" name="submit" id="refresh" value="submit">Refresh</button>
                </div>
            </div>
        </div>
    </body>
</html>