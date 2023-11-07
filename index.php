<?php include_once("darkmode-cookie.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>WEB APP</title>
  <meta charset="UTF-8">
  <meta name="author" content="Alessandro Monticelli">
  <meta name="description" content="WEB App Test">
  <meta name="keywords" content="homepage personal test Javascript HTML CSS">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="dark light">
  <link rel="stylesheet" href="style.css">
</head>

<body class="<?php echo $themeClass ?>">
  <header>
    <nav>
      <button class="btn-toggle">Toggle Dark-Mode</button>
    </nav>
  </header>
  <section>
    <h1>WEB APP</h2>
      <p>This is a simple test for toggling dark mode</p>
      <p>The server reminds the user choice using a cookie,
        defaulting to OS settings if the button is never pressed
      </p>
  </section>
</body>
<script src="./darkmode-handler.js"></script>

</html>
