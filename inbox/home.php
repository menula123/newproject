<?php 

include 'componants/navbar.php';






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

<div class="container" >



<div class="modal fade" id="loginModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center text-black">
           <h4 style="font-family:cursive;color: black;font-weight: bold;"><span style="color:deepskyblue;">In</span>Box</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form method="post" action="login_user.php">
            <div class="form-group">
              <input type="text" class="form-control" id="username" placeholder="Your Username..." name="Username_login" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email1" placeholder="Your email address..." name="email_login" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password1" placeholder="Your password..." name="password_login" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="login_btn">Login</button>
          </form>
          
         
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="signup.php" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div>
</div>
   

  <center>	

<div class="container">
  	<div class="col-sm-6">
  		<form method="post" >
  		<div class="card bg-black" style="border:1px solid #0066ff;">
    
  	<br>
  	<textarea rows="3" style="background: none;border: 1px solid #0066ff;margin: 20px;" placeholder="Say Something"></textarea>

    <center><p>OR</p></center>
<nav> 
    <label style="margin-right: 20px;"><i class="fa fa-image" style="color:deepskyblue;" title="images"></i>
    <input type="file" name="" style="display: none;margin-right: 20px;" accept="image/png, image/jpeg. image/jfif" name="image" >
    </label>

     <label style="margin-right:20px"><i class="fa fa-video" style="color:deepskyblue;" title="videos"></i>
    <input type="file" name="" style="display: none;" accept="video/mp4, video/WEBM , video/MOV, video/WMV" name="video">
    </label>

    <label style="margin-right:20px"><i class="fa fa-music" style="color:deepskyblue;" title="audio"></i>
    <input type="file" name="" style="display: none;" accept="audio/*"  name="audio">
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







<script type="text/javascript">
  	$(document).ready(function() {             
$('#loginModal').modal('show');
$("body").css("pointer-events","none" );
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
  </script>



</body>
</html>