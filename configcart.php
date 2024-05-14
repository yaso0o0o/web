<?php
$conn = mysqli_connect('localhost', 'root', '', 'cart');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>