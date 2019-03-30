<?php

  if(isset($_POST['submit']))
  {
        include_once 'db.inc.php';

        $username = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        //Verifica campuri libere
            if(empty($username) || empty($email) || empty($pwd))
              {
                header("Location: ../signup.php?err=empty");
                exit();
              }

        //Verifica username unic
            $sql = "SELECT * FROM users WHERE '$username' like u_name;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0)
              {
                header("Location: ../signup.php?err=name");
                exit();
              }

        //Verifica email unic
            $sql = "SELECT * FROM users WHERE '$email' like u_email;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0)
              {
                header("Location: ../signup.php?err=email");
                exit();
              }

        // Introducere date in tabel
            $sql="INSERT INTO users VALUES ('','$username','$pwd','$email','user');";
            mysqli_query($conn,$sql);
            header("Location: ../signup.php?register=success");
  }

  else
  {
    header("Location: ../signup.php");
    exit();
  }
