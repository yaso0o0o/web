<?php

include('config.php');
$id = $_GET['id'];
mysqli_query($cont , "DELETE FROM addcart WHERE id=$id");
header('location: cart.php') ;

?>