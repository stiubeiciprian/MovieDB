<?php

      include 'db.inc.php';

      if(isset($_POST['submit']))
        {
              $u_id = $_POST['u_id'];
              $m_id = $_POST['m_id'];
              $title = $_POST['title'];
              $content = $_POST['content'];


              if( empty($title) || empty($content) )
              {
                header("Location: ../film.php?id=$m_id");
                exit();
              }
              else {
                      $sql = "INSERT INTO review VALUES('','$u_id','$m_id','$title','$content');";
                      mysqli_query($conn,$sql);
                      header("Location: ../film.php?id=$m_id");
                      exit();
                  }

        } else {

                  header("Location: ../film.php?id=$m_id");
                  exit();
               }
