<?php
  include("common.php");
  printTop();
?>
<div class="row">
  <div class="col-lg-3"></div>
  <div class ="col-lg-6">
  <form class="form-horizontal" id="loginform" action="login.php" method="post">
    <fieldset>
      <legend>Log In</legend>
      <?php
			if (isset($_GET["fail"])) {
				?>
				<p class="danger">Please enter both a username and password.</p>
				<?php
			}
			?>
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input name="name" type="text" class="form-control" id="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10"></div>
      </div>
      <div class="form-group">
        <div class="col-lg-4 col-lg-offset-2">
          <a href="#" class="btn btn-primary">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
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
