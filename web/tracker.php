<?php 
  require_once 'header.php';

  if (!$loggedin) die();

  echo "<div class='main'>";

  if (isset($_POST['name'])) $name = $_POST['name'];
  else $name = "(Not entered)";
  
  if (isset($_POST['email'])) $email = $_POST['email'];
  else $email = "(Not entered)";
  
  if (isset($_POST['cardio'])) $cardio = $_POST['cardio'];
  else $cardio = "(Not entered)";
  
  if (isset($_POST['time'])) $time = $_POST['time'];
  else $time = "(Not entered)";
  
  if (isset($_POST['weightlift1'])) $weightlift1 = $_POST['weightlift1'];
  else $weightlift1 = "(Not entered)";
  
  if (isset($_POST['set1'])) $set1 = $_POST['set1'];
  else $set1 = "(Not entered)";
  
  if (isset($_POST['rep1'])) $rep1 = $_POST['rep1'];
  else $rep1 = "(Not entered)";
  
  if (isset($_POST['weightlift2'])) $weightlift2 = $_POST['weightlift2'];
  else $weightlift2 = "(Not entered)";
  
  if (isset($_POST['set2'])) $set2 = $_POST['set2'];
  else $set2 = "(Not entered)";
  
  if (isset($_POST['rep2'])) $rep2 = $_POST['rep2'];
  else $rep2 = "(Not entered)";
  
  if (isset($_POST['weightlift3'])) $weightlift3 = $_POST['weightlift3'];
  else $weightlift3 = "(Not entered)";
  
  if (isset($_POST['set3'])) $set3 = $_POST['set3'];
  else $set3 = "(Not entered)";
  
  if (isset($_POST['rep3'])) $rep3 = $_POST['rep3'];
  else $rep3 = "(Not entered)";
  
  if (isset($_POST['technique'])) $technique = $_POST['technique'];
  else $technique = "(Not entered)";
  
  if (isset($_POST['sets'])) $sets = $_POST['sets'];
  else $sets = "(Not entered)";
  
  if (isset($_POST['reps'])) $reps = $_POST['reps'];
  else $reps = "(Not entered)";

  echo <<<_END
<html>
    <head>
      <title>test </title>
    </head>
    <body>
        See your plan below: <br>
     Your plan name is: $name<br>
    Email: $email<br>
    Cardio: $cardio<br>
    Time: $time<br>
    Weightlifting 1: $weightlift1<br>
    Set 1: $set1<br>
    Rep 1: $rep1<br>
    Weightlifting 2: $weightlift2<br>
    Set 2: $set2<br>
    Rep 2: $rep2<br>
    Weightlifting 3: $weightlift3<br>
    Set 3: $set3<br>
    Rep 3: $rep3<br>
    Technique 1: $technique Sets 1: $sets Reps 1: $reps<br> 
    </body>
  </html>
  </ul></div>
  </body>
</html>
_END;
?>