<?php include_once 'includes/db.inc.php'; ?>

<!DOCTYPE html>
<html>

  <head>
    <title>DevMovies</title>
    <link rel="shortcut icon" href="resources/logo.ico">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  
  <body>
    <section class="signup-container">

      <header>
          <div id="logo"></div>
          <form action="includes/login.php" method="post">
            <input type="text" name="uid" placeholder="Username / E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Log in</button>
          </form>
      </header>

      <section class="cform">
          <h1>Sign up:</h1>

          <form action="includes/signup.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit">Sign up</button>
          </form>
      </section>


</body>
</html>
