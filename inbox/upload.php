<?php

include 'componants/db.php';



if (isset($_POST['upload'])) {
    $img_name = $_FILES['image']['name'];
    $folder = "images/".basename($img_name);
    $sql = "INSERT INTO posts(img) VALUES ('$img_name');";
    mysqli_query($connect,$sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'],$folder)) {
      header("Location:home==2.php");
    }





}



?>
