<?php

 $db = mysqli_connect("localhost","root","","robot-arm");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
 ?>
