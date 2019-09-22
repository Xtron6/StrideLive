<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?rnd=1.8">
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
<link rel="canonical" href="https://stridelive.co/account/login">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="../Logos/RTMBlack.JPG" />


     <title>Login</title>
     <meta name="description" content="The Stride Live website is the official website for The Running Through the Mind Podcast.">
</head>
<body style="overflow-y: auto; -webkit-overflow-scrolling: touch;" id="my_div" class="color-bg login-bg">
  <script type="text/javascript">

  $(document).ready(function(){
  	var formInputs = $('input[type="username"],input[type="password"]');
  	formInputs.focus(function() {
         $(this).parent().children('p.formLabel').addClass('formTop');
         $('div#formWrapper').addClass('darken-bg');
         $('div.logo').addClass('logo-active');
  	});
  	formInputs.focusout(function() {
  		if ($.trim($(this).val()).length == 0){
  		$(this).parent().children('p.formLabel').removeClass('formTop');
  		}
  		$('div#formWrapper').removeClass('darken-bg');
  		$('div.logo').removeClass('logo-active');
  	});
  	$('p.formLabel').click(function(){
  		 $(this).parent().children('.form-style').focus();
  	});
  });


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
  <!--Navigation-->
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
            <a class="nav-link" href="../index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../podcast">Podcast</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href= "../crew">Crew</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=../"products">Affiliate Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../shop">Shop RTM</a>
        </li>
            </ul>
          </div>
    </div>
  </nav>
  <!--title bar-->
  <div class="Podbar">
  <a href="shop"><b>Login to Stride Live</b></a>
  </div>

<div id="formWrapper">

<div id="form">
<div class="logo">
<img style="width: 85%;"src="../Logos/StrideLive.png" alt="">
</div>
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
      <div class="form-item">
        <div class="input-group form-group">
          <input type="username" class="form-style" id="username" name="username">
        <p class="formLabel">Username</p>
        </div>
      </div>
		<div class="form-item">
      <div class="input-group form-group">
        <input type="password" id="password" class="form-style" name="password">
        <p class="formLabel">Password</p>
      </div>
			<!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
			<p><a href="#" ><small>Forgot Password ?</small></a></p>
		</div>
		<div class="form-item">
		<p class="pull-left"><a href="register.php"><small>Register</small></a></p>
    <div class="input-group">
      <button type="submit" class="login pull-right btn btn-login float-right" value="Log In" name="login_user">Login</button>
    </div>
		<div class="clear-fix"></div>
		</div>
  </form>
</div>
</div>
</body>
</html>
