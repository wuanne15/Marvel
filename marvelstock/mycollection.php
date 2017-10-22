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
        for ($i=0; $i < count($user_todolist); $i++) {
          ?>
          <li>
            <form action="submit.php" method="post">
              <input type="hidden" name="action" value="delete" />
              <input type="hidden" name="index" value="<?= $i ?>" />
              <input type="submit" value="Delete" />
            </form>
            <?= htmlspecialchars($user_todolist[$i]) ?>
          </li>
          <?php
        }
      ?>
    </ul>
    <p>Credits:
    <?php     ?>
    </p>
    <p>Net Worth:
    <?php     ?>
    </p>
    <p>Characters owned:
    <?php     ?>
    </p>
    <p>Total Cards:
    <?php     ?>
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
      <th>#</th>
      <th>Character</th>
      <th>Quantity</th>
      <th>Value</th>
    </tr>
  </thead>
  <tbody>
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
