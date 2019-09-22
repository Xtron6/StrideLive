<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../style.css?rnd=1.6">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Open+Sans&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="../Logos/SL-FavIcon.ico">
   <meta name="viewport" content="width=device-
 width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="canonical" href="https://stridelive.co/account/home">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="../Logos/RTMBlack.JPG" />
	<title>Account Info</title>
</head>
<body style="overflow-y: auto; -webkit-overflow-scrolling: touch;" id="my_div" class="has-animation animation-rtsl">
  <script type="text/javascript">

  $(document).ready(function() {
  $('.has-animation').each(function(index) {
    $(this).delay($(this).data('delay')).queue(function(){
      $(this).addClass('animate-in');
    });
  });
});

window.onload=function()  //executes when the page finishes loading
{
	setTimeout(func1, 2000);  //sets a timer which calls function func1 after 2,000 milliseconds = 2 secs.

};
  </script>
  <nav class="navbar navbar-expand-md navbar-dark sticky-top">
    <div class="container-fluid">
      <div class="col-s">
      <a class="navbar-brand" href="../index"><img src="../Logos/StrideLive.png" alt="Strive Live Logo" class=logo></a>
            </div>
      <form class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
<span>&#9776;</span>
</form>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="podcast">Podcast</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href= "crew">Crew</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products">Affiliate Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop">Shop RTM</a>
        </li>
            </ul>
          </div>
    </div>
  </nav>

<div class="Podbar">
	<h4 style="color: black;">Your Account Info</h4>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h3 style="color: black;">Account Username:<strong><?php echo $_SESSION['username']; ?></strong></h3>
    	 	<h3 style="color: black;">Account Email:<strong><?php echo $_SESSION['email']; ?></strong></h3>
    	 	    	 	<h3 style="color: black;">Account Password:<strong><?php echo $_SESSION['password']; ?></strong></h3>
    	<p> <a href="../index.html?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>
