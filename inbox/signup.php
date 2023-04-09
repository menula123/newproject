<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</head>
<body>


<div class="container">


<br>
<br>
	<center><h1>Register</h1></center>

<form class="row g-3 needs-validation"  style="position:relative;top: 20vh;" action="signup_user.php" method="post">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">FUll name</label>
    <input type="text" class="form-control"  name="name" required>
  </div>

  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control"  name="username" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Email</label>
    <input type="email" class="form-control" name="email"  required>

  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Give a password</label>
    <input type="text" class="form-control" name="password" required>

  </div>
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Telno</label>
    <input type="telno" class="form-control" name="telno" required>

  </div>

  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Country</label>
    <input type="text" class="form-control"  name="country" required>

  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="btn">Register</button>
  </div>
</form>

</div>



</body>
</html>