<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <title>Randall Morin | Web Developer</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto:300"
    rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body id=''>
    <!-- Navigation -->
    <nav class="navigation-container">
      <div class="name-container">
        <p class="name">Randall Morin</p>
        <p class="web-dev">Web Developer</p>
      </div>
      <div class="links-container">
        <a href="./index.html" class="link">Home</a>
        <a href="./contact.php" class="link">Contact Me</a>
      </div>
      <i class="fas fa-bars"></i>
    </nav>

    <!-- Navigation Menu for Mobile -->
    <div class="navigation-menu">
      <div class="nav-links-container">
        <a href="./index.html" class="link">Home</a>
        <a href="./contact.php" class="link">Contact Me</a>
      </div>
    </div>

    <div class="main-container">
      <!-- Portfolio -->
      <section class="portfolio-header">
        <h1 class="thanks-for-visiting content-container">Check my work.</h1>
        <p class="helpful-things content-container">
          Before we take the full tour, there are some things that may be helpful for you.
          I've provided some details for each site, including which technologies are
          used to develop them, and a brief description of their content and context.
          <br>
          <br>
          Each preview is a fully functioning version of the website, except for
          The Ambulance Review's (audio/video functionality has been disabled in that preview).
          Admittedly, it's difficult to experience the entire website within such
          a small space, so I've provided some buttons to help!
        </p>
        <p class="mobile-buttons-info content-container">
          You'll see two buttons below the preview of the website. Clicking on the
          <em>Open Website</em> button will open the website in another tab in your browser.
          <br>
          <br>
          You can also view the code in my Github by clicking the <em>View Code in Github</em>
          button.
          <br>
          <br>
          Enjoy!
        </p>
        <p class="desktop-buttons-info content-container">
          You'll see three buttons below the preview of the website. Clicking on the
          <em>Open Website</em> button will open the website in another tab in your browser.
          <br>
          <br>
          You can view the code in my Github by clicking the <em>View Code in Github</em>
          button.
          <br>
          <br>
          I've also developed a more featured preview, which you can use by clicking
          the <em>Open in Fullscreen</em> button. Using this, you'll have the open
          of selecting a mobile, tablet, and desktop preview size.
          <br>
          <br>
          Enjoy!
        </p>
      </section>

      <section class="portfolio-section">
      <?php

        //get mysql creds
        require './creds.php';

        //open connection
        $conn = mysqli_connect($server, $user, $password, $dbname);

        //check connection
        if (!$conn) {
          die('Failed to connect to MySQL Database');
        }

        $query = 'SELECT id, title, description, url, rel_path, github, tech FROM portfolio_items';

        //query database
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
          while ($portfolio_item = mysqli_fetch_assoc($result)) {
          ?>
            <div class="portfolio-item">
              <div class="title-container">
                <p class="portfolio-title content-container"><?php echo $portfolio_item['title'];?></p>
              </div>
              <p class="portfolio-item-info content-container"><?php echo $portfolio_item['description'];?></p>
              <p class="tech content-container">Developed using <?php echo $portfolio_item['tech']?>.</p>
              <div class="portfolio-site-container">
                <div class="app-bar">
                  <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                  </div>
                  <div class="url-bar">
                    <p class="url"><?php echo $portfolio_item['url'];?></p>
                  </div>
                </div>
                <iframe class="preview-website" src="<?php echo $portfolio_item['rel_path'];?>"></iframe>
              </div>
              <div class="buttons-container">
                <a class="button" href="<?php echo $portfolio_item['github'];?>" target="_blank">
                  <span class="button-text">View Code in Github</span>
                  <i class="fab fa-github button-icon"></i>
                </a>
                <a class="button fullscreen">
                  <span class="button-text" onclick="openFullscreen(<?php echo $portfolio_item['id']?>)">Open in Fullscreen</span>
                  <i class="far fa-window-maximize button-icon"></i>
                </a>
                <a class="button" href="<?php echo $portfolio_item['rel_path'];?>" target="_blank">
                  <span class="button-text">Open Website</span>
                  <i class="fas fa-external-link-square-alt button-icon"></i>
                </a>
              </div>
            </div>
      <?php
          }
        }
      ?>
      <p class="fictional content-container">* denotes a fictional website</p>
      </section>

      <!-- Website Lightbox -->
      <div class="website-lightbox">
        <i class="fas fa-times close-lightbox" onclick="closeLightbox()"></i>
        <div class="width-adjustment">
          <div class="width-button" onclick="changeWebsiteViewportSize('mobile')">Mobile</div>
          <div class="width-button" onclick="changeWebsiteViewportSize('tablet')">Tablet</div>
          <div class="width-button width-button-clicked" onclick="changeWebsiteViewportSize('desktop')">Desktop</div>
        </div>
        <div class="website-viewport">
          <iframe class="website"></iframe>
        </div>
      </div>

      <!-- Footer -->
      <footer>
        <p class="thanks">Thanks for visiting!</p>
        <div class="social-container">
          <a href="https://www.linkedin.com/in/randall-morin-b6a77b17a/" class="social-icon" target="_blank">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="https://github.com/randallmorin" class="social-icon" target="_blank">
            <i class="fab fa-github-square"></i>
          </a>
        </div>
        <p class="copyright">&copy; 2019 randallmorin.com</p>
      </footer>
    </div>


    <script src='./js/jQuery_3.1.1'></script>
    <script src='./js/main.js'></script>
  </body>
</html>

























<!--  -->
