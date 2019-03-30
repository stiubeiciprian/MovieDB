<?php include 'includes/header.inc.php'; ?>

<h1>
<?php echo "Welcome back, ".$_SESSION['u_name']."!"; ?>
</h1>
<section class="search">
    <form action="movies.php" method="get">
        <input type="text" name="title" placeholder="Search for movie...">
        <input type="hidden" name="genre" value="">
        <input type="hidden" name="order" value="">
        <div>
          <button type="submit" name="search">Search</button>
        </div>
    </form>
</section>

<h2>Latest movies:</h2>

<section class="movies">
    <?php

      $sql = "SELECT * FROM movie WHERE m_date <= sysdate() ORDER BY m_date desc;";
      $result = mysqli_query($conn,$sql);
      $rowsNumber = mysqli_num_rows($result);

      for($i=1; $i<=$rowsNumber && $i<=10;$i++)
      {
        $row = mysqli_fetch_assoc($result);
        echo '<a href="film.php?id='.$row['m_id'].'">
                <img class="poster"src="resources/images/'.$row['m_id'].'.png" title="'.$row['m_title'].'">
              </a>';

      }
      ?>
</section>


<h2>Upcoming movies:</h2>

<section class="movies">
    <?php

      $sql = "SELECT * FROM movie WHERE m_date > sysdate() ORDER BY m_date;";
      $result = mysqli_query($conn,$sql);
      $rowsNumber = mysqli_num_rows($result);

      for($i=1; $i<=$rowsNumber && $i<=5;$i++)
      {
        $row = mysqli_fetch_assoc($result);
        echo '<a href="film.php?id='.$row['m_id'].'">
                <img class="poster"src="resources/images/'.$row['m_id'].'.png" title="'.$row['m_title'].'">
              </a>';

      }
    ?>
</section>

</body>
</html>
