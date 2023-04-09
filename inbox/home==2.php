<?php 

include 'componants/navbar.php';
include 'componants/db.php';















?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
  
</head>


<style type="text/css">
  .container {
  padding: 2rem 0rem;

}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 400px;
  }
  .modal-dialog .modal-content {
    padding: 1rem;
  }
}
.modal-header .close {
  margin-top: -1.5rem;
}

.form-title {
  margin: -2rem 0rem 2rem;
}

.btn-round {
  border-radius: 3rem;
}

.delimiter {
  padding: 1rem;
}

.social-buttons .btn {
  margin: 0 0.5rem 1rem;
}

.signup-section {
  padding: 0.3rem 0rem;
}

label  {
   cursor: pointer;
}
</style>


<body style="background:black">


   

  <center>  

<div class="container">
    <div class="col-sm-12 col-lg-6">
      <form method="post" action="upload.php" enctype='multipart/form-data'>
      <div class="card bg-black" style="border:1px solid #0066ff;">
    
    <br>
    <textarea rows="3" style="background: none;border: 1px solid #0066ff;margin: 20px;" placeholder="Say Something"></textarea>

    <center><p>OR</p></center>
<nav> 
    <label style="margin-right: 20px;"><i class="fa fa-image" style="color:deepskyblue;" title="images"></i>
    <input type="file" style="display: none;margin-right: 20px;" accept="image/*" name="image">
    </label>

     <label style="margin-right:20px"><i class="fa fa-video" style="color:deepskyblue;" title="videos"></i>
    <input type="file" style="display: none;" accept="video/*" name="video">
    </label>

    <label style="margin-right:20px"><i class="fa fa-music" style="color:deepskyblue;" title="audio"></i>
    <input type="file"  style="display: none;" accept="audio/*"  name="audio">
    </label>

</nav>    


    <button class="btn btn-primary" type="submit" style="margin: 20px;background: #0066ff;" name="upload">Upload</button>
    <br>
    <br>
</form>
  </div>
    </div>
    </div>

    
  </center>




<?php

echo "
  <center>
    <div class='container' >
      <div class='col-sm-12 col-lg-6'>
        <div class='card' style='background:none;border:0.5px solid white'>
      "; // added concatenation operator after the echo statement

$img = mysqli_query($connect , " SELECT * FROM posts ORDER BY id  DESC ");

if($row = mysqli_fetch_assoc($img)) {

  echo "<img src='images/".$row['img']."'"; // corrected missing concatenation operator

}

echo "
          <br>
          <br>
        </div>
      </div>
    </div>
  </center>
"; // added concatenation operator before the closing echo statement

?>













</body>
</html>