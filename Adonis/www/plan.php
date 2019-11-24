<?php 
  require_once 'header.php';

  if (!$loggedin) die();

  echo "<div class='main'>";

  echo <<<_END
<html>
    <head>
      <title>test </title>
    </head>
  <script>
    function addField(n)
        {
      var tr = n.parentNode.parentNode.cloneNode(true);
      document.getElementById('tbl').appendChild(tr);
        }
  </script>
    <body>
        Customize your very own workout by selecting the options below! <br><br>
         
    <form method="post" action="tracker.php">
      Plan Name:
      <input type="text" name="name">
      <br>
      <br>
      E-mail: 
      <input type="text" name="email"><br>
      <br>
      Cardio: 
      <select name="cardio" name="cardio">
        <option value="tread">Treadmill</option>
        <option value="bike">Spin Bicycle</option>
        <option value="elliptical">Elliptical</option>
      </select>

        Time (mins):
        <select name="time" name="time">
            <option value="1">10</option>
            <option value="2">15</option>
            <option value="3">30</option>
            <option value="3">45</option>
            <option value="3">60</option>
        </select>
        <br>
        <br>
      Weightlift 1:
      <select name="weightlift1" name="weightlift1">
          <option value="bench">Flat Bench Press</option>
          <option value="squat">Squat</option>
          <option value="deadlift">Deadlift</option>
      </select>
      Sets:
      <select name="set1" id="set1">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="3">4</option>
          <option value="3">5</option>
      </select>
      Number of Reps:
      <select name="rep1" id="rep1">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="3">4</option>
          <option value="3">5</option>
          <option value="3">6</option>
          <option value="3">7</option>
          <option value="3">8</option>
          <option value="3">9</option>
          <option value="3">10</option>
          <option value="3">11</option>
          <option value="3">12</option>
      </select>
      <br>
      <br>
      Weightlift 2:<select name="weightlift2" id="weightlift2">
          <option value="incline">Incline Bench Press</option>
          <option value="gm">Good Mornings</option>
          <option value="romanian">Romanian Deadlift</option>
      </select>
      Sets:
      <select name="set2" id="set2">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="3">4</option>
          <option value="3">5</option>
      </select>
      Number of Reps:
      <select name="rep2" id="rep2">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="3">4</option>
          <option value="3">5</option>
          <option value="3">6</option>
          <option value="3">7</option>
          <option value="3">8</option>
          <option value="3">9</option>
          <option value="3">10</option>
          <option value="3">11</option>
          <option value="3">12</option>
      </select>
      <br>
      <br>
      Weightlift 3:<select name="weightlift3" id="weightlift3">
          <option value="dumbbellflys">Dumbbell Flys</option>
          <option value="lunges">Lunges</option>
          <option value="oneleg">1 legged deadlift</option>
      </select>
      Sets:
      <select name="set3" id="set3">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="3">4</option>
          <option value="3">5</option>
      </select>
      Number of Reps:
      <select name="rep3" id="rep3">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="3">4</option>
          <option value="3">5</option>
          <option value="3">6</option>
          <option value="3">7</option>
          <option value="3">8</option>
          <option value="3">9</option>
          <option value="3">10</option>
          <option value="3">11</option>
          <option value="3">12</option>
      </select>
      <br>
      <br>
        <table id="tbl" style="width:150px">
            <tr>
                <th>Technique</th>
                <th>Sets</th>
                <th>Reps</th>
            </tr>
            <tr>
                <td><input type="text" name="technique" /></td>
                <td><input type="text" name="sets" /></td> 
                <td><input type="text" name="reps" /></td>   
                <td><input type="button" class="button" value="Add another line" onclick="addField(this);" /></td>          
            </tr>
        </table>
      <br /><br />
      <input type="reset" name="reset">
      <input type="submit">
    </form>
    </body>
  </html>
  </ul></div>
  </body>
</html>
_END;
?>