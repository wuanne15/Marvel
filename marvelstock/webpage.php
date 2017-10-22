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
                <!--<li><a href="#">Log in or Sign up</a></li>-->
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
          </div>
        </div>
      </nav>
      <div class="navpad"><img src="stockmarvel-logo.png" alt="Marvel Banner" height="200" class="center-block"></div>
      <h1>Welcome to Stock Marvel</h1>
      <p>This is some text.</p>
      <div class="row">
        <div class="col-sm-6">
          <ul class="pagination">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>#</th>
                <th>Character</th>
                <th class="text-right">Credits</th>
                <th class="text-right">Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Iron Man</td>
                <td class="text-right">3000</td>
                <td class="text-right">+0</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Spiderman</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="info">
                <td>3</td>
                <td>Thor</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="success">
                <td>4</td>
                <td>Wolverine</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="danger">
                <td>5</td>
                <td>Captain America</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="warning">
                <td>6</td>
                <td>Loki</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="active">
                <td>7</td>
                <td>Hulk</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-sm-4">
          <h2>Popular Cards</h2>
          <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
          <p><small>This line of text is meant to be treated as fine print.</small></p>
          <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
          <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
          <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
        </div>
      </div>
    </div>
  </body>
</html>
