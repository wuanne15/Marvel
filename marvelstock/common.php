<?php
  session_start();

  # This will set the user's name and their corresponding todolist file.
  $name = "BLAH";
  $filename = "";
  if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    $filename = "cards_" . $name . ".txt";
  }

  # This function will check if the user is currently logged in.
  function loggedIn() {
    return isset($_SESSION["name"]);
  }

  # This function will redirect the page to a given destination then end the current page.
  function redirect($destination) {
    header("Location: " . $destination);
    die();
  }

  function printTop() {
  	# This will set the user's name and their corresponding todolist file.
  	$name = "";
  	$filename = "";
  	if (isset($_SESSION["name"])) {
  		$name = $_SESSION["name"];
  		$filename = "cards_" . $name . ".txt";
  	}

    ?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <title>Stock Marvel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- default bootstrap css page <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="padding.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css" rel="stylesheet" integrity="sha384-Xqcy5ttufkC3rBa8EdiAyA1VgOGrmel2Y+wxm4K3kI3fcjTWlDWrlnxyD6hOi3PF" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      </head>

      <body>
        <div class="container-fluid">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">Stock Marvel</a>
              </div>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="characterpage.php">All Stocks<span class="sr-only">(current)</span></a></li>
                    <li><a href="characterpage.php">Character List</a></li>
                    <li><a href="about.php">About</a></li>
                  </ul>
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (loggedIn()) {
                        ?>
                        <ul class="nav navbar-nav">
                          <li><a href="#">10000¢</a></li>
                        </ul>
                        <div class="btn-group">
                          <a id= "WTF" href="#" class="btn btn-default"><?=$name?></a>
                          <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="mycollection.php">My Collection</a></li>
                            <li class="divider"></li>
                            <li><a href="signout.php">Logout</a></li>
                          </ul>
                        </div>
                        <?php
                   } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php
                    }
                    ?>
                  </ul>
              </div>
            </div>
          </nav>
          <div class="navpad"><img src="stockmarvel-logo.png" alt="Marvel Banner" height="200" class="center-block"></div>
    <?php
  }

  # This function will print the bottom portion of the Remember the Cow site.
  function printBot() {
    ?>
        </div>
      </body>
    </html>
    <?php
  }

  function connect() {
  	$db = new PDO();
  	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	return $db;
  }
?>
