<?php
/*
  session_start();

  # This will set the user's name and their corresponding todolist file.
  $name = "";
  $filename = "";
  if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    $filename = "todo_" . $name . ".txt";
  }

  # This function will check if the user is currently logged in.
  function loggedIn() {
    return isset($_SESSION["name"]);
  }

  # This function will redirect the page to a given destination then end the current page.
  function redirect($destination) {
    header("Location: " . $destination);
    die();
  }*/

  # This function will print the top portion of the Remember the Cow site.
  function printTop() {
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
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#">Log in or Sign up</a></li>-->
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
?>
