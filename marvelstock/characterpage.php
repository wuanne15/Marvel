<?php
  include("common.php");
  printTop();
?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="characterpage.js"></script>
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
                    <button id="char-graph" type="submit" class="btn btn-default">Submit</button>
                  </form>
                </div>
                <div id="chart" class="panel-body" style="height: 1120%">
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
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <?php
      printBot();
?>
