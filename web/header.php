<?php 
  session_start();

  echo <<<_INIT
  <!DOCTYPE html> 
  <html>
    <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'> 
      <link rel='stylesheet' href='js/jquery.mobile-1.4.5.min.css'>
      <link rel='stylesheet' href='css/styles.css' type='text/css'>
      <script src='js/javascript.js'></script>
      <script src='jquery/jquery-2.2.4.min.js'></script>
      <script src='jquery/jquery.mobile-1.4.5.min.js'></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>;
  
  _INIT;

  require_once 'functions.php';
  $userstr = ' (Guest)';

  // if (isset($_SESSION['user']))
  // {
  //   $user     = $_SESSION['user'];
  //   $loggedin = TRUE;
  //   $userstr  = " ($user)";
  // }
  // else $loggedin = FALSE;

  // echo "<title>$appname$userstr</title><link rel='stylesheet' " .
  //      "href='css/styles.css' type='text/css'>"                     .
  //      "</head><body><center><canvas id='logo' width='624' "    .
  //      "height='96'>$appname</canvas></center>"             .
  //      "<div class='appname'>$appname$userstr</div>"            .
  //      "<script src='js/javascript.js'></script>";              
  //      "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>";
  echo "<title>$appname$userstr</title>
  // if ($loggedin)
  // {
    echo "<br ><ul class='menu'>" .
         "<li><a href='members.php?view=$user'>Home</a></li>" .
         "<li><a href='plan.php'>My Plans</a></li>"         .
         "<li><a href='tracker.php'>Tracker</a></li>"         .
         "<li><a href='members.php'>Members</a></li>"         .
         //"<li><a href='friends.php'>Friends</a></li>"         .
         //"<li><a href='messages.php'>Messages</a></li>"       .
         "<li><a href='profile.php'>Edit Profile</a></li>"    .
         "<li><a href='logout.php'>Log out</a></li></ul><br>";
  // }
  // else
  // {
  //   echo ("<br><ul class='menu'>" .
  //         "<li><a href='index.php'>Home</a></li>"                .
  //         "<li><a href='signup.php'>Sign up</a></li>"            .
  //         "<li><a href='login.php'>Log in</a></li></ul><br>"     .
  //         "<span class='info'>&#8658; You must be logged in to " .
  //         "view this page.</span><br><br>");
  // }
?>
