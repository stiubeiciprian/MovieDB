<?php

include 'db.inc.php';

if(isset($_POST['submit']))
{
        //Verifica erori date
        $title = addslashes($_POST['title']);
        $trailer = $_POST['trailer'];
        $length = $_POST['length'];
        $date = $_POST['date'];
        $description = addslashes($_POST['description']);
        $genres = $_POST['genres'];

        if(empty($title) || empty($trailer) || empty($length) || empty($date) || empty($description) || empty($genres))
        {
          header("Location: ../upload.php?upload=error");
          exit();
        }


        //Verifica erori imagine
        $image = $_FILES['image'];

        $imageName = $image['name'];
        $imageType = $image['type'];
        $imageTmp = $image['tmp_name'];
        $imageErr = $image['error'];

        $nameArray = explode('.',$imageName);
        $extension = strtolower(end($nameArray));

        if($extension != "png")
        {
          header("Location: ../upload.php?fileType=invalid");
          exit();
        }

        if( $imageErr != 0)
        {
          header("Location: ../upload.php?upload=error");
          exit();
        }

        //Introducere date in tabel
        $sql = "INSERT INTO movie VALUES('','$title','$trailer','$length','$date','$description');";
        mysqli_query($conn,$sql);

        //Id film
        $sql = "SELECT * FROM movie ORDER BY m_id desc;";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $movieId = $row['m_id'];

        //Creare relatie gen - film

        $genre_array = explode(",",$genres);

        foreach ($genre_array as $genre) {

            $sql = "SELECT * FROM genre WHERE '$genre' like g_name;";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);

            if($row){
                        $genreId = $row['g_id'];

                        $sql = "INSERT INTO movie_genre VALUES('$movieId','$genreId');";
                        mysqli_query($conn,$sql);
                    }
        }



        //Incarcare imagine
        $imageNewName = $movieId.".png";
        $imageDestination = 'C:/xampp/htdocs/devmovies/resources/images/'.$imageNewName;
        move_uploaded_file($imageTmp,$imageDestination);


        header("Location: ../upload.php?upload=succes");
        exit();
}
else {
        header("Location: ../upload.php");
        exit();
     }
