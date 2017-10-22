<?php
  include("common.php");
  printTop();
?>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="index.js"></script>
<div class="row"></div>
  <div class="col-lg-3">
    <h3>Most Valuable</h3>
     *Calls image*
    <li>
      *Net Loss, *Stock Count*
    </li>
  </div>
  <div class="col-lg-3">
    <h3>Most Owned</h3>
    *Calls image*
    <li>
       *Net Loss, *Stock Count*
    </li>
  </div>
  <div class="col-lg-3">
    <h3>Worst Investment</h3>
     *Calls image*
    <li>
       *Net Loss, *Stock Count*
    </li>
  </div>
  <div class="col-lg-3">
    <h2 class="text-center">Profile:</h2>
    <ul id="list">
      <?php
        # If the user doesn't have a todolist file, create one.
        if (!file_exists($filename)) {
          $file = fopen($filename, 'w');
          fclose($file);
        }
        # Populate the todolist, while escaping HTML special characters to prevent injection
        # attacks.
        $user_todolist = file($filename, FILE_IGNORE_NEW_LINES);
      ?>
    </ul>
    <p>Credits:
    <?php     ?>
    </p>
    <p>Net Worth:
    <?php     ?>
    </p>
    <p>Characters owned:
    <?= count($user_todolist) ?>
    </p>
    <p>Total Cards:
    <?php
    $cardCount = 0;
    for ($i=0; $i < count($user_todolist); $i++) {
        $cardData = explode(" ", htmlspecialchars($user_todolist[$i]));
        $cardCount = $cardCount + $cardData[0];
    }
    ?>
    <?= $cardCount ?>
    <?php
    ?>
    </p>
    <p>First Login:
    <?php     ?>
    </p>
    <p>Other Stats?:
    <?php     ?>
    </p>
  </div>
</div>

<table id="ranking" class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Change</th>
      <th>Character</th>
      <th>Quantity</th>
      <th>Value</th>
    </tr>
  </thead>
  <tbody>
    <?php
    for ($i=0; $i < count($user_todolist); $i++) {
      $cardData = explode(" ", htmlspecialchars($user_todolist[$i]));
      ?>
      <tr>
        <td>???</td>
        <td><?= $cardData[1] ?></td>
        <td><?= $cardData[0] ?></td>
        <td>???</td>
      </tr>
      <?php
    }
    ?>
    <tr>
      <td>aef</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr>
      <td>ef</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr>
      <td>ef</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
  </tbody>
</table>
<?php
  printBot();
?>
