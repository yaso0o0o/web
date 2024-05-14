<?php
$servername= "localhost";
$username = "root";  
$password = ""; 
$database = "dbuser"; 
   
$cont = new mysqli($servername, $username, $password, $database);
if($cont->connect_error){
 die("connectin failed". $cont->connect_error);
}
echo "";
?>