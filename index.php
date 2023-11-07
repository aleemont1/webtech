<?php
  $theme = '';
  if(!empty($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
  }
?>

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
  </head>

  <body>
    <header>
      <nav>
        <button class="theme-toggle">Toggle Dark Mode</button>
      </nav>
    </header>
    <section>
      <h1>WEB APP</h1>
      <p>This is a WEB APP test</p>
    </section>
  </body>
</html>
