<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Welcome to Pizza Hut</h1>
 <form action="index.php" method="get">
<label >Quantity:</label><br>
<input type="text" name="quantity">
<input type="submit" value="total" >
</form>
    <?php
  $price = 5.99;
  $quantity = $_GET["quantity"];

  $total= null;
  $total= $quantity * $price;

   echo "Your total Bill is {$total}";

    ?>
</body>
</html>
