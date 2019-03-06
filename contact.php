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
        <a href="./portfolio.php" class="link">Portfolio</a>
      </div>
      <i class="fas fa-bars"></i>
    </nav>

    <!-- Navigation Menu for Mobile -->
    <div class="navigation-menu">
      <div class="nav-links-container">
        <a href="./index.html" class="link">Home</a>
        <a href="./portfolio.php" class="link">Portfolio</a>
      </div>
    </div>
    <div class="main-container">
      <!-- Contact -->
      <section class="contact content-container">
        <h1 class="getting-in-touch">Need to get in touch?</h1>
        <p class="getting-in-touch-info">
          Feel free to send an email to me using this form! I will make my absolute
          best effort in getting back to you within 24 hours.
          <br>
          <br>
          All fields are required.
        </p>

        <form class="contact-form" action="./success.php" method="post" onsubmit="return submitForm()">
          <input class="name-input input" type="text" name="fullname" placeholder="Name (Letters and Spaces)" autocomplete="off">
          <input class="email-input input" type="text" name="email" placeholder="Email (example@example.com)" autocomplete="off">
          <input class="subject-input input" type="text" name="subject" placeholder="Subject" autocomplete="off">
          <textarea class="message input" name="message" placeholder="Message" autocomplete="off"></textarea>
          <input type="submit" value="Send" class="submit">
        </form>

      </section>

      <!-- Footer -->
      <footer class='contact-footer'>
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
    <script src='./js/form.js'></script>
    <script src='./js/main.js'></script>
  </body>
</html>
