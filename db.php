<?php
$db_host= 'localhost';
$db_user= 'root';
$db_pass= '';
$db_database='okonti';



$con = mysqli_connect($db_host, $db_user,$db_pass, $db_database);




mysqli_select_db($con,$db_database ) or die("нет соединения с DATABASE".mysqli_error($con));
mysqli_set_charset($con,"utf8");

if (mysqli_error($con)) {
        echo mysqli_error($con);
        exit();
}
?>       