<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inbox | Future Of Photo Uploading</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://kit.fontawesome.com/a29ee4a909.js" crossorigin="anonymous"></script>

</head>
<body>



   <style type="text/css">

        body {
	     background-color:#04132e;
        }
         
        .sidenav {
        	width: 250px;
        	height: 100%;
        	position: fixed;
         border-right: 1px solid #020d24;
        	
        	left: 0;
        	top: 0;
        	background-color:#020d24;
        	display: block;
        }

        .sidenav h2 {
        	padding: 20px;
        	margin-top: 10px;
        	font-size: 30px;
        	cursor: pointer;


        }


    	  .sidenav li {
   		font-family: 'Lexend', sans-serif;
   		list-style-type: none;
   		color: white;
   		padding: 17px;
   		cursor: pointer;
   		font-size: 20px;
   		
   	  }

   	  .sidenav li:hover {
   	  	background-color: black;
   	  	color:#00b3ff;
   	  }

   	  * {
   	  	color: white;
   	  }

   	  .navbar {
   	  	position: fixed;
   	  	background-color: white;
   	  	left: 300px;
   	  	width: ;
   	  }

   	  .header {
   	  	display: none;
   	  }

   	  #btn-nav {
   	  	display: none;
   	  }

   	  .offcanvas-body li{
   	  	font-family: 'Lexend', sans-serif;
   		list-style-type: none;
   		color: white;
   		padding: 17px;
   		cursor: pointer;
   		font-size: 20px;
   		text-decoration: none;
   	  }


   	  @media all and (max-width: 800px) {
           .sidenav {
           	display: none;
           }

           .header {
           	display: block;
           }

           #btn-nav {
           	display: block;
           	pointer-events: ;
           }
   	  }

   </style>
   
<!--sidenav and the offcanves designing-->


   <div class="sidenav">
         <h2 onclick="location.href='index.php'" style="font-family:cursive;color: white;font-weight: bold;cursor: pointer;"><span style="color:deepskyblue;" onclick="location.href='index.php'"> In</span>Box</h2>
   	
   	
   			<li onclick="location.href='index.php'">Home</li>
   			<li onclick="location.href='profile.php'">Profile</li>
   			<li onclick="location.href='upload.php'">Upload</li>
   			<li onclick="location.href='logout.php'" style="color: red;">Logout</li>
   		
   
   </div>




   <a style="position:fixed;top: 20px;margin-left: 10px;" id="btn-nav" class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" >
      <i class="fa fa-bars" style="color:white"></i>
   </a>




   <br>
  <center><h2 class="header" style="font-family:cursive;color: white;font-weight: bold;cursor: pointer;" onclick="location.href='index.php'"><span style="color:deepskyblue;" >In</span>Box</h2></center>
   


   <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="position:fixed;top: 0;background: #020d24;color: white;">
     <div class="offcanvas-header">
    
         <h2 style="font-family:cursive;color: white;text-align: center;cursor: pointer;"><span style="color:deepskyblue;" onclick="location.href='index.php'">In</span>Box</h2>

         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
     
   	
   	
   			<li><a  style="color: white;text-decoration: none;"  href="index.php">Home</a></li>
   			<li><a  style="color: white;text-decoration: none;" href="profile.php">Profile</a></li>
   			<li><a style="color: white;text-decoration: none;" href="upload.php">Upload</a></li>
   			<li style="color: red;text-decoration: none;"><a href="logout.php"style="color: red;text-decoration: none;">Logout</a></li>
   		
   
   </div>

     </div>
   </div>




 <!--end of the sidenav code-->

 <script type="text/javascript">
 	$(document).ready(function() {
 		$("#btn-nav").css("pointer-events","")
 	})
 </script>




   

</body>
</html>






