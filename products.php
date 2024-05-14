<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Product</title>
    <link rel="stylesheet" href="product.css">
    <link rel="icon" href="grocery.icon">
</head>
<body>
    <?php
    include('config.php');
    $result = mysqli_query($cont, "SELECT * FROM product");
    echo "<div class='products-container'>";
    while($row = mysqli_fetch_array($result)){
        echo "
            <div class='product-card'>
            <img src='{$row['image']}' alt='Product image' class='product-img'>
                <div class='product-title'>$row[name]</div>
                <div class='product-price'>$row[price]</div>
                <button><a href='delete.php?id=$row[id]' class='btn'>delete</a></button>
                <button><a href='edit.php?id=$row[id]' class='btn'>edit</a></button>
            </div>
        ";
    }
    echo "</div>";
    ?>
</body>
</html>