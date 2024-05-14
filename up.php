<?php
include('config.php');

if(isset($_POST['update'])){
    $name  = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $imagelocation = $_FILES ['image']['tmp_name'];
    $imagename     = $_FILES ['image']['name'];
    $imageup       = "images/".$imagename ;
    $id            = $_POST['id'];
    $update        = "UPDATE product SET name ='$name' , price = '$price' , image = '$imageup' WHERE id = $id " ;
    mysqli_query($cont , $update);
    if(move_uploaded_file($imagelocation,'images/'.$imagename)){
        echo "done";
    }else{
        echo "error";
    }
    header('location: products.php') ;
  }
?> 