<!DOCTYPE html>
<html>
<body>
<div>
  <p>1. 4+2=?</p>
  <p>You answered:<?php echo $_POST["question1"]; ?></p>
  <p>Correct answer:6</p>
  <br>
</div>
<div>
  <p>2. 4-2=?</p>
  <p>You answered:<?php echo $_POST["question2"]; ?></p>
  <p>Correct answer:2</p>
  <br>
</div>
<div>
  <p>3. 4*2=?</p>
  <p>You answered:<?php echo $_POST["question3"]; ?></p>
  <p>Correct answer:8</p>
  <br>
</div>
<div>
  <p>4. 4/2=?</p>
  <p>You answered:<?php echo $_POST["question4"]; ?></p>
  <p>Correct answer:2</p>
  <br>
</div>
<div>
  <p>5. 4**2=?</p>
  <p>You answered:<?php echo $_POST["question5"]; ?></p>
  <p>Correct answer:16</p>
  <br>
</div>
<div>
  <?php
    $x = 0;
    if ($_POST["question1"] == 6)
      $x += 1;
    if ($_POST["question2"] == 2)
      $x += 1;
    if ($_POST["question3"] == 8)
      $x += 1;
    if ($_POST["question4"] == 2)
      $x += 1;
    if ($_POST["question5"] == 16)
      $x += 1;
    echo "<p>Total:";
    echo $x;
    echo "/5</p>";
    $x *= 20;
    echo "<p>Score:";
    echo $x;
    echo "%</p>"
  ?>
</div>
</body>
</html>
