<?php include 'includes/header.inc.php'; ?>


<section class="search">
    <form action="movies.php" method="get">
        <input type="text" name="title" placeholder="Search for movie...">

        <div>
          <select name="order">
            <option value="">Order</option>
            <option value="asc">Asc</option>
            <option value="desc">Desc</option>
            <option value="upcoming">Upcoming</option>
            <option value="new">Newest</option>
            <option value="old">Oldest</option>
          </select>

          <select name="genre">
            <option value="">Genre</option>
            <option value="1">Action</option>
            <option value="2">Adventure</option>
            <option value="3">Animation</option>
            <option value="4">Comedy</option>
            <option value="5">Crime</option>
            <option value="6">Documentary</option>
            <option value="7">Drama</option>
            <option value="8">Family</option>
            <option value="9">Fantasy</option>
            <option value="10">History</option>
            <option value="11">Horror</option>
            <option value="12">Musical</option>
            <option value="13">Mystery</option>
            <option value="14">Romance</option>
            <option value="15">Science-Fiction</option>
            <option value="16">Thriller</option>
            <option value="17">War</option>
          </select>

          <button type="submit" name="search">Search</button>
        </div>
    </form>
</section>


  <section class="table">
    <?php

          if(!isset($_GET['search']))
          {
                $sql="SELECT * FROM movie ORDER BY m_date desc";

          } else {
                      $title = $_GET['title'];
                      $order = $_GET['order'];
                      $genre = $_GET['genre'];

                      $sql="SELECT * FROM movie WHERE m_title like '%$title%' ";

                      if(!empty($genre))
                      {
                          $sql = "SELECT * FROM movie m, movie_genre mg WHERE mg.m_id=m.m_id and m_title like '%$title%' and mg.g_id=$genre ";
                      }

                      if(!empty($order))
                        if($order == "new") $sql = $sql."and m_date<=sysdate() ORDER BY m_date desc";
                        else if( $order == "old") $sql = $sql."and m_date<=sysdate() ORDER BY m_date";
                             else if( $order == "upcoming") $sql = $sql."and m_date>sysdate() ORDER BY m_date";
                                   else if($order == "desc") $sql = $sql." ORDER BY m_title desc";
                                        else $sql = $sql." ORDER BY m_title";
                      else $sql = $sql." ORDER BY m_date desc";

                 }

          $sql = $sql.";";
          $result=mysqli_query($conn,$sql);
          $resultNum = mysqli_num_rows($result);
          if($resultNum)
          {
              echo '    <table>
                      <tr>
                        <th>Title</th>
                        <th>Genres</th>
                        <th>Date</th>
                        <th>Length</th>
                      </tr>';

              while($row = mysqli_fetch_assoc($result))
              {
                  $m_id = $row['m_id'];
                  echo '<tr>
                          <td><a href="film.php?id='.$m_id.'">'.$row['m_title'].'</a></td>
                          <td>';

                      $sql = "SELECT * FROM movie_genre mg, genre g WHERE mg.m_id=$m_id and mg.g_id=g.g_id;";
                      $genres = mysqli_query($conn,$sql);
                      while($data = mysqli_fetch_assoc($genres))
                        echo $data['g_name'].' ';

                  echo  ' </td>
                          <td>'.$row['m_date'].'</td>
                          <td>'.$row['m_length'].'</td>
                      </tr>';
              }
          }
          else echo '<h1>No movies found in database.</h1>';

     ?>
    </table>
  </section>

</body>
</html>
