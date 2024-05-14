<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY CART</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="icon" href="grocery.icon">
</head>
<body>
    <?php
    include('config.php');
    $result = mysqli_query($cont, "SELECT * FROM addcart");
    if (!$result) {
        die('Query Error: ' . mysqli_error($cont));
    }

    while ($row = mysqli_fetch_array($result)){    
        echo "
        
        <center>
    <main>
       <table class='table'>
          <thead>
            <tr>
               <th scope='col'>NAME PRODUCT</th>
               <th scope='col'>PRICE PRODUCT</th>
               <th scope='col'>DELETE PRODUCT</th>
            </tr>
          </thead>
          <tbody>
              <tr>
               <td>$row[name]</td>
               <td>$row[price]</td>
               <td><a href='delcart.php ? id=$row[id]' class='del'>DELETE </td>
              </tr>
          </tbody>
        </table>
    </main>
   </center>
        
        
        ";
    }
    ?>
    <center>
    <form class="register-container" id="payment" action="payment.php">
    <button type="submit" name="payment" class="Button-link">GO TO PAYMENT</button><br><br>
        <a href="showproduct.php" >BACK TO PRODUCTS</a>
</center>
</body>
</html>