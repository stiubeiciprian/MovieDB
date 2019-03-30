<?php

  include 'includes/header.inc.php';

  if( $_SESSION['u_role']!= "admin" && $_SESSION['u_role']!= "uploader") header("Location: index.php?AccesRestricted");
?>
<section class="cform">
  <h2>Upload Movie</h2>

  <form action="includes/upload.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Title">
    <textarea type="text" name="description" placeholder="Description"></textarea>
    <input type="text" name="genres" placeholder="Genres (genre1,genre2...)">
    <input type="text" name="date" placeholder="Release date (YYYY-MM-DD)">
    <input type="text" name="length" placeholder="Length">
    <input type="text" name="trailer" placeholder="Trailer link (https://www.youtube.com/embed/...)">
    <input type="file" name="image">
  <button type="submit" name="submit">Upload</button>
  </form>
</section>


</body>
</html>
