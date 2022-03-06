<?php
// (A) START SESSION 
session_start();
 
// (B) HANDLE LOGIN
if (isset($_POST['user']) && !isset($_SESSION['user'])) {
  // (B1) USERS & PASSWORDS - SET YOUR OWN !
   $users = [
    "b1" => "x",
    "b2" => "x",
    "b3" => "x"
  ];
 
  // (B2) CHECK & VERIFY
  if (isset($users[$_POST['user']])) {
    if ($users[$_POST['user']] == $_POST['password']) {
      $_SESSION['user'] = $_POST['user'];
      $_SESSION['login'] = true;
      if ($_POST['user'] == "b1") {
          $_SESSION['id'] = 1;
      }
      if ($_POST['user'] == "b2") {
        $_SESSION['id'] = 2;
    }
    if ($_POST['user'] == "b3") {
        $_SESSION['id'] = 3;
    }
    }
  }
 
  // (B3) FAILED LOGIN FLAG
  if (!isset($_SESSION['user'])) { $failed = true; }
}
 
// (C) REDIRECT USER TO HOME PAGE IF SIGNED IN
if (isset($_SESSION['user'])) {
  header("Location: controller.php"); // SET YOUR OWN HOME PAGE!
  exit();
}