<?php
  include("common.php");
  printTop();
  $conn = connect();
  $sql = "SELECT *
		FROM characters
  		ORDER BY count DESC
		LIMIT 15";
 $res = mysqli_query($conn, $sql);
 $char = 0;
 if (!isset($_POST["char"])) {
   # code...
 } else {
   $char = $_POST["char"];
 }

 if (!isset($_POST["action"])) {
   redirect("characterpage.php?fail=true");
 } else {
   if (!file_exists($filename)) {
     $file = fopen($filename, 'w');
     fclose($file);
   }
   # Populate the todolist, while escaping HTML special characters to prevent injection
   # attacks.
   $user_todolist = file($filename, FILE_IGNORE_NEW_LINES);
   $cardData = 0;
   $index = 0;
   for ($i=0; $i < count($user_todolist); $i++) {
       $temp = explode(" ", htmlspecialchars($user_todolist[$i]));
       if ($temp[1] == $_POST["char"]) {
         $cardData = $temp;
         $index = $i;
       }
   }
   unset($user_todolist[$index]);
   $file = fopen($filename, 'w');
   for ($i=0; $i < count($user_todolist); $i++) {
     fwrite($file, $user_todolist[$i]);
   }
   fclose($file);
   if ($_POST["action"] == "add") {
     $add_item = $cardData[0] + 1;
     file_put_contents($filename, $add_item . " " . $cardData[1] . "\n", FILE_APPEND);
   } else {
     $user_todolist = file($filename);
     $add_item = $cardData[0] - 1;
     file_put_contents($filename, $add_item . " " . $cardData[1] . "\n", FILE_APPEND);
   }
   redirect("characterpage.php");
 }
 /*
  while ($row = mysqli_fetch_array($res))
 {
 	echo "{name: " . $row['character_name'] . ", ";
 	echo "count: " . $row['count'] . ", ";
 	echo "image_path: " . $row["image_path"] . "}, ";
 }*/

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
                      if (true){
                        ?>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#purchase">Purchase</button>
                        <div class="modal fade" id="purchase" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">
                                  <?php
                                    if ($char == 0) {
                                      $char = "Hero Name"
                                    }
                                  ?>
                                  <?=$char?></h4>
                              </div>
                              <div class="modal-body">
                                <p>Purchase</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="close" data-dismiss="modal">Close</button>
                                <form>
                                  <input type="number" class="form-control" id:quantity placeholder="0">
                                </form>
                                <li><a href="characterpage.php" class="btn btn-default">Purchase</a></li>
                                <li><a href="characterpage.php" class="btn btn-default">Sell</a></li>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                      } else {
                        ?>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#purchase">Purchase</button>
                        <div class="modal fade" id="purchase" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Hero Name</h4>
                              </div>
                              <div class="modal-body">
                                <p>Purchase</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="close" data-dismiss="modal">Close</button>
                                <form>
                                  <input type="number" class="form-control" id="quantity" placeholder="0">
                                </form>
                                <li><a href="characterpage.php" class="btn btn-default">Purchase</a></li>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <form class="navbar-form navbar-center" role="search" action="characterpage.php" method="post">
                    <input type="text" name="char" class="form-control" placeholder="Character Name">
                    <button id="char-graph" type="submit" class="btn btn-default">Search</button>
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
