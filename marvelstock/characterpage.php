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
                <a class="navbar-brand" href="webpage.php">Stock Marvel</a>
            </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="characterpage.php">All Stocks<span class="sr-only">(current)</span></a></li>
                  <li><a href="characterpage.php">Character List</a></li>
                  <li><a href="about.html">About</a></li>
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
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
          </div>
        </nav>
        <div class="navpad"><img src="stockmarvel-logo.png" alt="Marvel Banner" height="200" class="center-block"></div>
        <div class="container-fluid">
          <h2>Character Information</h2>
          <div class="row">
            <div class="col-lg-4">
              <div class="panel panel-default">
                <div id="heroname" class="panel-heading text-center">
                  InsertName
                </div>
                <div class="panel-body text-center">
                  Card Image
                </div>
                <div class="row panel-body">
                  <div class="col-lg-6">
                    CardValue
                  </div>
                  <div class="col-lg-6">
                    <p class="text-right">Owned/Unowned</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <form class="navbar-form navbar-center" role="search">
                    <input type="text" class="form-control" placeholder="Character Name">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                </div>
                <div class="panel-body">
                  Insert Stock Chart Here
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h2>Character Info</h2>
              <p>All Time High: </p>
              <p>Net Change Last Month: </p>
              <p>Other stats and things</p>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
