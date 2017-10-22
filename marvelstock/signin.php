<?php
  include("common.php");

  if (loggedIn()) {
			redirect("index.php");
	}

  if (!isset($_POST["name"]) || !isset($_POST["password"]) || $_POST["name"] == ""
      || $_POST["password"] == "") {
    redirect("login.php?fail=true");
  } else {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    $existing_user = false;
    foreach ($users as $user) {
      list($user_name, $user_password) = explode(":", $user, 2);
      if ($name == $user_name) {
        # See if the passwords match
        $existing_user = true;
        if ($password == $user_password) {
          # Start a session, set a last login cookie, and redirect to todolist.php
          session_start();
          login($name);
        } else {
          # Redirect back to start.php
          redirect("index.php");
        }
      }
    }
    # If the user does not have an account, the webservice will attempt to create an account.
    if (!$existing_user) {
      # See if the user input is formatted correctly
      $user_name_format = "/^[a-z][a-z0-9]{2,7}$/";
      $password_format = "/^[0-9].{4,10}[^a-zA-Z0-9]$/";
      if (preg_match($user_name_format, $name) && preg_match($password_format, $password)) {
        # Create a new user, start a new session, and redirect to todolist.php
        $new_user = $name . ":" . $password . "\n";
        file_put_contents("users.txt", $new_user, FILE_APPEND);
        session_start();
        login($name);
      } else {
        # Redirect back to start.php
        redirect("index.php");
      }
    }
  }

  # This function logs the user in, remembering the last time someone logged in for 7 days
  function login($name) {
    $_SESSION["name"] = $name;
    setcookie("last_login", date("D y M d, g:i:s a"), time() + 60 * 60 * 24 * 7);
    redirect("index.php");
  }
?>
