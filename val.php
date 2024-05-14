<?php
 include('config.php');
 $id=$_GET['id'];
 $up= mysqli_query($cont, "SELECT * FROM product WHERE id =$id");
 $data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECK</title>
    <link rel="icon" href="grocery.icon">
    <link rel="stylesheet" href="product.css">
</head>
<body>
<center>
        <dev class="main" style="margin-top: 1200px;">
            <form action="insertcart.php" method ="post">
            <h1>PROCCEED TO CHECKOUT</h1>
            <input type="text" name="id" display="none" value='<?php echo $data['id']?>' style="display: none;">
            <input type="image" name="image" display="none" value='<?php echo $data['image']?>' style="display: none;">
            <input type="text" name="name" display="none" value='<?php echo $data['name']?>' style="display: none;">
            <input type="text" name="price" display="none" value='<?php echo $data['price']?>' style="display: none;">
            <button name="add" type="submit" class='btn'>confirm</button><br><br>
            <a href="showproduct.php">BACK TO PRODUCTS</a>
            </form>
        </dev>
    </center>
</body>
</html>