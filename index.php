<?php
ini_set("display_errors", "1");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funny Password Generator!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Funny Password Generator!</a>
        </div>
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h2>Funny Password Generator!</h2>
        <p>The best way to create funny paswords</p>
        <div class="input-group" id="generate-form">
          <span class="input-group-btn">
            <button class="btn btn-primary" type="button">Generate!</button>
          </span>
          <input type="text" class="form-control" id="generate-input" readonly="readonly">
        </div><!-- /input-group -->
      </div>
    </div>

    <div class="container">
      <div class="bs-callout bs-callout-warning">
        <p>Are you boring? Meet our <a href="captcha.php">funny captcha</a> or our <a href="logo.php">funny logo</a></p>
      </div>
      
      <hr>

      <footer>
        <p>&copy; Pedro Prez 2014, inspirated in this <a href="https://twitter.com/gushbellino/status/454996024046936064" target="_blank">tweet</a> from <a href="https://twitter.com/gushbellino" target="_blank">@gushbellino</a></p>
      </footer>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>