<?php
  session_start();

  if(isset($_POST['submit']))
    {
          include_once 'db.inc.php';

          $uid = $_POST['uid'];
          $pwd = $_POST['pwd'];

          //Verificare campuri libere
          if(empty($uid) || empty($pwd))
            {
              header("Location: ../signup.php?emptyfields");
              exit();
            }

          //Verificare username sau email
          $sql = "SELECT * FROM users WHERE '$uid' like u_name OR '$uid' like u_email;";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck < 1)
            {
              header("Location: ../signup.php?username=invalid");
              exit();
            }

          //Verificare parola
          $sql = "SELECT * FROM users WHERE '$uid' like u_name OR '$uid' like u_email;";
          $data = mysqli_fetch_assoc($result);

          if($pwd != $data['u_pwd'])
            {
             header("Location: ../signup.php?password=invalid");
             exit();
            }

          //Introducere date in tabel
          $_SESSION['u_id'] = $data['u_id'];
          $_SESSION['u_name'] = $data['u_name'];
          $_SESSION['u_email'] = $data['u_email'];
          $_SESSION['u_role'] = $data['u_role'];

          header("Location: ../index.php?login=success");
          exit();

    }
    else {
            header("Location: ../signup.php?login=error");
            exit();
         }
