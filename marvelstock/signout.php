<?php
  include("common.php");
  if (loggedIn()) {
    session_destroy();
    session_regenerate_id(TRUE);
    session_start();
  }
  redirect("index.php");
?>
