<?php include 'includes/header.inc.php';?>

<section class="movie-container">

  <?php

      $m_id = $_GET['id'];
      $u_id = $_SESSION['u_id'];

      $sql = "SELECT * FROM movie WHERE m_id like '$m_id';";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);

      $m_trailer = $row['m_trailer'];

      if($row == NULL) header("Location: index.php");
      else {

              echo '
                          <img src="resources/images/'.$m_id.'.png" class="poster">

                          <span>
                            <h1><b>'.$row['m_title'].' - '.substr($row['m_date'],0,4).'</b></h1>
                            <p>'.$row['m_description'].'</p>
                          </span>

                      </section>

                      <span id="details">
                        <p> <b>Release date:</b> '.$row['m_date'].'</p> <p><b>Length:</b> '.$row['m_length'].'</p>
                        <p><b>Genres:</b>';
           }


       $sql = "SELECT * FROM movie_genre mg, genre g WHERE mg.m_id like '$m_id' and mg.g_id like g.g_id;";
       $result = mysqli_query($conn,$sql);

       while( $row = mysqli_fetch_assoc($result) )
         echo ' '.$row['g_name'].' ';

  ?>
  </p>
</span>


<section class="commands">

      <form action="includes/buttons.php" method="post">

          <?php

                echo '<input type="hidden" name="m_id" value="'.$m_id.'">
                      <input type="hidden" name="u_id" value="'.$u_id.'">';

                $sql = "SELECT * FROM watchlist WHERE u_id like $u_id and m_id like $m_id;";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);

                if($row) echo '<button type="submit" name="removeW">Remove from Watchlist</button>';
                else echo '<button type="submit" name="addW">Add to Watchlist</button>';

                if($_SESSION['u_role'] != 'user')
                echo '<button type="submit" name="delete">Delete Movie</button>';
          ?>

      </form>
</section>

<section class="trailer">
  <?php  echo'<iframe width="694" height="390" src="'.$m_trailer.'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'; ?>
</section>

<section class="cform">
  <?php
      echo '

                <h2>Write a review:</h2>
                <form action="includes/review.php" method="post">

                  <input type="text" name="title" placeholder="Title">
                  <textarea name="content" placeholder="Write your review" ></textarea>
                  <input type="hidden" name="u_id" value="'.$u_id.'">
                  <input type="hidden" name="m_id" value="'.$m_id.'">
                  <button type="submit" name="submit">Send</button>

                </form>

          ';
  ?>
</section>

<section class="reviews">

  <?php

    $sql = "SELECT * FROM review r, users u WHERE m_id=$m_id and u.u_id=r.u_id ORDER BY r_id desc;";
    $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_assoc($result))
            {
                echo '
                        <div class="review-container">

                          <h4>'.$row['u_name'].' - '.$row['r_title'].'</h4>
                          <p>'.$row['r_content'].'</p>

                        </div>

                    ';
            }

  ?>
</section>

</body>
</html>
