<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logo Generator!</title>

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
          <a class="navbar-brand" href="#"><img src="logoimage.php?type=isologo" original-path="logoimage.php" class="isologo-white" height="50" /><img src="logoimage.php?type=logotipo&color=white" original-path="logoimage.php" class="logotipo-white" height="50" /></a>
        </div>
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h2>Funny Logo Generator!</h2>
        <p>The best way to create funny logos</p>
        <form class="form" role="form" action="papa.php">
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" id="btnUpdateLogo">Generate Logo!</button>
          </div>
          <div class="form-group">
            <dl>
              <dt>Favicon (32x32)</dt>
              <dd><img src="logoimage.php" original-path="logoimage.php" id="favicon" height="32" /></dd>
            </dl>
            <dl>
              <dt>IsoLogo (50x50)</dt>
              <dd><img src="logoimage.php?type=isologo" original-path="logoimage.php" class="isologo" height="50" /></dd>
            </dl>
            <dl>
              <dt>Logotipo (?x50)</dt>
              <dd><img src="logoimage.php?type=logotipo" original-path="logoimage.php" class="logotipo" height="50" /></dd>
            </dl>
            <?php /*
            <img src="logoimage.php?type=word" original-path="logoimage.php?type=word" id="logo" height="50" />
            */?>
          </div>
        </form>
      </div>
    </div>

    <div class="container">
      <div class="bs-callout bs-callout-warning">
        <p>Are you boring? Meet our <a href="index.php">funny password</a> or our <a href="captcha.php">funny captcha</a></p>
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