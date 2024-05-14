<?php

include('config.php');
$id = $_GET['id'];
mysqli_query($cont , "DELETE FROM product WHERE id=$id");
header('location: products.php') ;

?>