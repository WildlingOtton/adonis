<?php 
  require_once 'header.php';

  echo <<<_END
  <script>
    function checkUser(user)
    {
      if (user.value == '')
      {
        $('#used').html('&nbsp;')
        return
      }

      $.post
      (
        'checkuser.php',
        { user : user.value },
        function(data)
        {
          $('#used').html(data)
        }
      )
    }
  </script>  
  <div class='main'><h3>Please enter your details to sign up</h3>
_END;

  $error = $user = $pass = "";
  if (isset($_SESSION['user'])) destroySession();

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
      $error = 'Not all fields were entered<br><br>';
    else
    {
      $result = queryMysql("SELECT * FROM members WHERE user='$user'");

      if ($result->num_rows)
        $error = 'That username already exists<br><br>';
      else
      {
        queryMysql("INSERT INTO members VALUES('$user', '$pass')");
        // $stmt = $conn->prepare("INSERT INTO members (user, pass) VALUES (?, ?)");
        die('<h4>Account created</h4>Please Log in.</div></body></html>');
      }
    }
  }

  echo <<<_END
    <form method='post' action='signup.php'>$error
    <span class='fieldname'>Username</span>
    <input type='text' maxlength='16' name='user' value='$user'
      onBlur='checkUser(this)'><span id='info'></span><br>
    <span class='fieldname'>Password</span>
    <input type='text' maxlength='16' name='pass'
      value='$pass'><br>
_END;
?>

    <span class='fieldname'>&nbsp;</span>
    <input type='submit' value='Sign up'>
    </form></div><br>
  </body>
</html>
