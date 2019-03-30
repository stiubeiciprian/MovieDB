<?php include 'includes/header.inc.php'; ?>
<h2>Watchlist</h2>
<section class="movies">
<?php

  $u_id = $_SESSION['u_id'];

  $sql = "SELECT * FROM movie m, watchlist w WHERE m.m_id like w.m_id and w.u_id like $u_id ;";
  $result = mysqli_query($conn,$sql);

  while($row = mysqli_fetch_assoc($result))
  {
      echo '<a href="film.php?id='.$row['m_id'].'">
              <img class="poster"src="resources/images/'.$row['m_id'].'.png" title="'.$row['m_title'].'">
            </a>';

  }
?>
</section>

</body>
</html>
