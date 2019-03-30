<?php

  include 'includes/header.inc.php';

  if( $_SESSION['u_role']!= "admin") header("Location: index.php?AccesRestricted");
?>
<section class="table">
    <table>

      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th></th>
      </tr>

      <?php

        $u_id = $_SESSION['u_id'];
        $sql = "SELECT * FROM users WHERE u_id not like '$u_id';";
        $result=mysqli_query($conn, $sql);

          while($row = mysqli_fetch_assoc($result)){
            echo
            '<tr>
                <td>'.$row['u_id'].'</td>
                <td>'.$row['u_name'].'</td>
                <td>'.$row['u_email'].'</td>
                <td>'.$row['u_role'].'</td>
                <td>
                  <form class="roles" action="includes/buttons.php" method="post">
                    <button type="submit" name="admin">Admin</button>
                    <button type="submit" name="uploader">Uploader</button>
                    <button type="submit" name="user">User</button>
                    <input type="hidden" name="u_id" value="'.$row['u_id'].'">
                  </form>
                </td>
             </tr>';
          }

       ?>
    </table>
</section>

</body>
</html>
