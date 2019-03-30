<?php
      include 'db.inc.php';

      $m_id = $_POST['m_id'];
      $u_id = $_POST['u_id'];

      // Remove review
      if(isset($_POST['removeR']))
      {
        $sql = "DELETE FROM review WHERE m_id like $m_id and u_id like $u_id;";
        mysqli_query($conn,$sql);

        header("Location: ../film.php?id=$m_id");
        exit();
      }


      // Delete movie
      if(isset($_POST['delete']))
      {
        $sql = "DELETE FROM movie WHERE m_id like $m_id;";
        mysqli_query($conn,$sql);

        header("Location: ../film.php?id=$m_id");
        exit();
      }

      // Add to watchlist
      if(isset($_POST['addW']))
     {
       $sql = "INSERT INTO watchlist VALUES('$u_id','$m_id');";
       mysqli_query($conn,$sql);

       header("Location: ../film.php?id=$m_id");
       exit();
     }

     // Remove from Watchlist
      if(isset($_POST['removeW']))
      {
        $sql = "DELETE FROM watchlist WHERE m_id like $m_id and u_id like $u_id;";
        mysqli_query($conn,$sql);

        header("Location: ../film.php?id=$m_id");
        exit();
      }

      // Change role admin / uploader / user

      if(isset($_POST['admin'])) $role = "admin";
      else if (isset($_POST['uploader'])) $role = "uploader";
           else if(isset($_POST['user']))$role = "user";

      $sql = "UPDATE users SET u_role = '$role' WHERE u_id like '$u_id';";
      mysqli_query($conn,$sql);

      header("Location:../users.php");
      exit();
