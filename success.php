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
  <body id='' class="success-body">
    <!-- Navigation -->
    <nav class="navigation-container">
      <div class="name-container">
        <p class="name">Randall Morin</p>
        <p class="web-dev">Web Developer</p>
      </div>
      <div class="links-container">
        <a href="./index.html" class="link">Home</a>
        <a href="./portfolio.php" class="link">Portfolio</a>
        <a href="./contact.php" class="link">Contact Me</a>
      </div>
      <i class="fas fa-bars"></i>
    </nav>

    <?php
      function validateData($data) {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
      }

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //form information
        $name = validateData($_POST['name']);
        $email = validateData($_POST['email']);
        $subject = validateData($_POST['subject']);
        $message = validateData($_POST['message']);


        //email information
        $to = 'randall@randallmorin.com';
        $emailMessage = wordwrap($message, 70, PHP_EOL) . PHP_EOL . PHP_EOL . $name . $email;
      }

      if (mail($to, $subject, $emailMessage)) {
        echo "Success";
      }
    ?>

    <!-- Navigation Menu for Mobile -->
    <div class="navigation-menu">
      <div class="nav-links-container">
        <a href="./index.html" class="link">Home</a>
        <a href="./portfolio.php" class="link">Portfolio</a>
        <a href="./contact.php" class="link">Contact Me</a>
      </div>
    </div>
    <div class="main-container">
      <section class="success">
        <h1 class="success-header content-container">Thanks for reaching out.</h1>
        <p class="success-message content-container">
          Please allow me 24 hours to get back to you. In the meantime, feel free
          to look at my <a href='./portfolio.php'>portfolio</a>, or head <a href="./index.html">home</a>.
        </p>
      </section>

      <!-- Footer -->
      <footer class="success-footer">
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
    <script src="./js/success-style.js"></script>
    <script src='./js/main.js'></script>
  </body>
</html>
