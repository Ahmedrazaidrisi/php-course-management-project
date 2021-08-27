<?php
$servername='localhost';
$username='root';
$password='';
$dbname='pp';
$con= mysqli_connect($servername,$username,$password,"$dbname");

if(!$con){
       echo "failed to connect :" .mysqli_connect_error();
}


?>
