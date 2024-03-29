<?php 
//  $dbhost  = 'localhost';    
//  $dbname  = 'adonis';   
//  $dbuser  = 'adonis';   
//  $dbpass  = 'Foster75';   

 $appname = "Adonis Weightlifting and Gym Tracker"; 
  
  
    //Get Heroku ClearDB connection information
  $url      = parse_url(getenv("mysql://b535a409effbb0:ab29bfbf@us-cdbr-iron-east-05.cleardb.net/heroku_b29d41fe2ddb930?reconnect=true"));
  $server   = $url["us-cdbr-iron-east-05.cleardb.net"];
  $username = $url["b535a409effbb0"];
  $password = $url["ab29bfbf"];
  $db       = substr($url["heroku_b29d41fe2ddb930"],1);


  $active_group = 'default';
  $query_builder = TRUE;

  $db['default'] = array(
      'dsn'    => '',
      'hostname' => $server,
      'username' => $username,
      'password' => $password,
      'database' => $db,
      'dbdriver' => 'mysqli',
      'dbprefix' => '',
      'pconnect' => FALSE,
      'db_debug' => (ENVIRONMENT !== 'production'),
      'cache_on' => FALSE,
      'cachedir' => '',
      'char_set' => 'utf8',
      'dbcollat' => 'utf8_general_ci',
      'swap_pre' => '',
      'encrypt' => FALSE,
      'compress' => FALSE,
      'stricton' => FALSE,
      'failover' => array(),
      'save_queries' => TRUE
  );

  // $connection = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $connection = new mysqli($server, $username, $password, $db);
  // if ($connection->connect_error) die($connection->connect_error);
    if ($connection->connect_error) die("Fatal Error");

    

// $connection = new mysqli($server, $username, $password, $db);
// // Check connection
// if ($connection->connect_error) {
//    die("Connection failed: " . $connection->connect_error);
// }
//   echo "Connected successfully";

  function createTable($name, $query)
  {
    queryMySQL("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
  }

  function queryMySQL($query)
  {
    global $connection;
   // $result = $connection->query($query);
    $result = mysqli_query($connection,$query);
     if (!$result) die("Fatal Error - broke");
     return $result;
  }

  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc())
    $var = stripslashes($var);
      return $var;
    //return $connection->mysqli_real_escape_string($var);
  }

  function showProfile($user)
  {
    if (file_exists("$user.jpg"))
      echo "<img src='$user.jpg' style='float:left;'>";

    $result = queryMySQL("SELECT * FROM profiles WHERE user='$user'");

    if ($result->num_rows)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
    }
    else echo "<p>Nothing to see here, yet</p><br>";
  }

  function destroySession()
  {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }
?>
