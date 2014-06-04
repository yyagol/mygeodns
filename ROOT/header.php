<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link href="/css/custom.css" rel="stylesheet">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="wrap">
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img alt="myGeoDNS" src="/images/logo.png" style="width:60px;"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if($_GET['p']=='home'){echo 'class="active"';}?>><a href="/home">Home</a></li>
            <li <?php if($_GET['p']=='about'){echo 'class="active"';}?>><a href="/about">About</a></li>
            <li <?php if($_GET['p']=='contact'){echo 'class="active"';}?>><a href="/contact">Contact</a></li>
            <li <?php if($_GET['p']=='pricing'){echo 'class="active"';}?>><a href="/pricing">Pricing</a></li>
           </ul>
           <form class="navbar-form navbar-right" role="login" method="post" action="/functions/login">
  				<div class="form-group">
    				<input name="email" type="text" class="form-control" placeholder="email">
    				<input name="password" type="password" class="form-control" placeholder="password">
  				</div>
  				<button type="submit" class="btn btn-default">Login / Sign</button>
  			</form>
        </div>
      </div>
    </div>