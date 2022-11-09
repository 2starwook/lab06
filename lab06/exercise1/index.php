<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<table>
  <tr>
    <?php
    echo "<th></th>";
    for ($x = 1; $x <= 100; $x+=1) {
      echo "<th>$x</th>";
    } 
    ?>
  </tr>
  <?php
    for ($x = 1; $x <= 100; $x+=1) {
      echo "<tr>";
      echo "<td>$x</td>";
      for ($y = 1; $y <= 100; $y+=1){
        $z = $x*$y;
        echo "<td>$z</td>";
      }
      echo"</tr>";
    } 
    ?>
</table>

</body>
</html>