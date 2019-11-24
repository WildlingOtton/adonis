<?php 
//  $dbhost  = 'localhost';    
//  $dbname  = 'adonis';   
//  $dbuser  = 'adonis';   
//  $dbpass  = 'Foster75';   
//  $appname = "Adonis Weightlifting and Gym Tracker"; 
  
  
    //Get Heroku ClearDB connection information
  $cleardb_url      = parse_url(getenv("mysql://b535a409effbb0:ab29bfbf@us-cdbr-iron-east-05.cleardb.net/heroku_b29d41fe2ddb930?reconnect=true"));
  $cleardb_server   = $cleardb_url["us-cdbr-iron-east-05.cleardb.net"];
  $cleardb_username = $cleardb_url["b535a409effbb0"];
  $cleardb_password = $cleardb_url["ab29bfbf"];
  $cleardb_db       = substr($cleardb_url["heroku_b29d41fe2ddb930"],1);


  $active_group = 'default';
  $query_builder = TRUE;

  $db['default'] = array(
      'dsn'    => '',
      'hostname' => $cleardb_server,
      'username' => $cleardb_username,
      'password' => $cleardb_password,
      'database' => $cleardb_db,
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

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die($connection->connect_error);

  function createTable($name, $query)
  {
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
  }

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    return $result;
  }

  function destroySession()
  {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }

  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
  }

  function showProfile($user)
  {
    if (file_exists("$user.jpg"))
      echo "<img src='$user.jpg' style='float:left;'>";

    $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");

    if ($result->num_rows)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
    }
  }
?>
