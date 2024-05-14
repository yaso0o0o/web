<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL PRODUCTS</title>
    <link rel="icon" href="grocery.icon">
    <link rel="stylesheet" href="product.css">
</head>
<body>
<body>
<div class="container">
        <header>
          <?php
          include('config.php');
          $selectrow = mysqli_query($cont ,"SELECT * FROM addcart") or die ('query failed');
          $rowcount = mysqli_num_rows($selectrow);
          ?>
     <a href="cart.php">  <img src="shopping-cart.png" width="37px" higth="37px" style="margin-left: 1019px; "></a>
                <span class="quantity" 
                style="background: red;
                        border-radius: 50%;
                        display: flex; 
                        justify-content: center;
                        align-items: center;
                        color: #fff;
                        margin-left: 1040px;
                        position: absolute;
                        padding: 3px 7px;"  ><?php echo $rowcount ?></span>
            </div>
        </header>
    <center>
       <h1> ALL PRODUCTS </h1>
    </center>
<?php
  include('config.php');
  $result = mysqli_query($cont, "SELECT * FROM product");
  while($row = mysqli_fetch_array($result)){
    echo "
  <div class='product-card'>
    <img src='{$row['image']}' alt='Product image' class='product-img' name='image'>
     <div class='product-title' name='name'>$row[name]</div>
     <div class='product-price' name='price'>$row[price]</div>
     <a href='val.php? id=$row[id]' class='btn' name='add'>Add to cart </a>
  </div>
 ";
      }
?>
</body>
</html>