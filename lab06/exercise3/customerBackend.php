<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
<div class="user-info">
  <p>Welcome!
    <br>
    <?php
      echo "username: ";
      echo $_POST["username"];
      echo "<br>password: ";
      echo $_POST["password"];
    ?>
  </p>
</div>
<div class="receipt">
  <h1>Receipt</h1>
  <table class="receipt-table">
    <tr>
      <th class="receipt-table"></th>
      <th class="receipt-table">Quantity</th>
      <th class="receipt-table">Cost Per Item</th>
      <th class="receipt-table">Sub Total</th>
    </tr>
    <tr>
      <td class="receipt-table">Black Apple</td>
      <td class="receipt-table">
        <?php echo $_POST["item1-count"]; ?>
      </td>
      <td class="receipt-table">$100.00</td>
      <td class="receipt-table">
        <?php
          $x = $_POST["item1-count"]*100;
          echo "$";
          echo $x; 
        ?>
      </td>
    </tr>
    <tr>
      <td class="receipt-table">Red Apple</td>
      <td class="receipt-table">
        <?php echo $_POST["item2-count"]; ?>
      </td>
      <td class="receipt-table">$2.00</td>
      <td class="receipt-table">
        <?php
          $y = $_POST["item2-count"]*2;
          echo "$";
          echo $y; 
        ?>
      </td>
    </tr>
    <tr>
      <td class="receipt-table">Green Apple</td>
      <td class="receipt-table">
        <?php echo $_POST["item3-count"]; ?>
      </td>
      <td class="receipt-table">$1.00</td>
      <td class="receipt-table">
        <?php
          $z = $_POST["item3-count"]*1;
          echo "$";
          echo $z; 
        ?>
      </td>
    </tr>
    <tr>
      <td class="receipt-table">Shipping</td>
      <?php
          if ($_POST["shipping-method"] == 1){
            $s = 0;
            echo "<td colspan='2'>";
            echo "Free Shipping";
            echo "</td>";
            echo "<td>";
            echo "$0";
            echo "</td>";
          }
          elseif($_POST["shipping-method"] == 2){
            $s = 50;
            echo "<td colspan='2'>";
            echo "Over Night Shipping";
            echo "</td>";
            echo "<td>";
            echo "$50";
            echo "</td>";
          }
          elseif($_POST["shipping-method"] == 3){
            $s = 5;
            echo "<td colspan='2'>";
            echo "Three Day Shipping";
            echo "</td>";
            echo "<td>";
            echo "$5";
            echo "</td>";
          }
        ?>
    </tr>
    <tr>
      <td colspan="3" class="receipt-table">Total Cost</td>
      <td class="receipt-table">
        <?php 
          $t = $s + $x + $y + $z;
          echo "$";
          echo $t;
        ?>
      </td>
    </tr>
  </table>
</div>

</body>
</html>