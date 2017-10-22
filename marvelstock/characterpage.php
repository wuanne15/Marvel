<?php
  include("common.php");
  printTop();
?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="characterpage.js"></script>
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
                    <?php if (loggedIn()) {
                      if (hasCard){
                        ?>
                        <p class="text-right">Owned</p>
                        <?php
                      } else {
                        ?>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#purchase">Purchase</button>
                        <?php
                      }
                    }
                    ?>

                    <div class="modal fade" id="Purchase" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">Purchase</button>
                            <h4 class="modal-title">Hero Name</h4>
                          </div>
                          <div class="modal-body">
                            <p>Purchsae </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
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
              </div>
              <div id="chart" style=height: 500px></div>
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
