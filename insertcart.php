<?php
include('config.php');

if (isset($_POST['add'])) {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id =$_POST['id'];
    $insert = "INSERT INTO addcart (image, name, price, id) VALUES ('$image', '$name', '$price', '$id')";
    mysqli_query($cont, $insert);
    header('Location: cart.php');
}
?>
