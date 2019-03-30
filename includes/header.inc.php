<?php
  include_once 'includes/db.inc.php';

  session_start();
  
  if(!isset($_SESSION['u_id'])) header("Location: signup.php");

  function list_check($role){
    if($role == "admin")
      echo '<li><a href="upload.php">Upload</a></li>
            <li><a href="users.php">Users</a></li>';
    else if($role == "uploader")
            echo '<li><a href="upload.php">Upload</a></li>';
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>DevMovies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="resources/logo.ico">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=latin-ext" rel="stylesheet">
  </head>

  <body>
      <header>

              <a href="index.php"><div id="logo"></div></a>
              <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="watchlist.php">Watchlist</a></li>
                    <li><a href="movies.php">Movies</a></li>
                    <?php list_check($_SESSION['u_role']); ?>

                    <form action="includes/logout.php" method="post"><button type="submit" name="submit">Log out</button></form>
                </ul>
              </nav>

      </header>
