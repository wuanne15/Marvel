<?php
  include("common.php");
  printTop();
  ?>
  <div class="row">
    <div class="col-lg-3"></div>
    <div class ="col-lg-6">
      <form class="form-horizontal">
      <fieldset>
        <legend>Sign Up</legend>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Confirm Password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10"></div>
        </div>
        <div class="form-group">
          <div class="col-lg-4 col-lg-offset-2">
            <a href="#" class="btn btn-primary">Cancel</a>
            <a href="#" class="btn btn-primary">Submit</a>
          </div>
        </div>
      </fieldset>
      </form>
    </div>
    <div class="col-lg-3"></div>
  </div>
  <?php
  printBot();
?>
