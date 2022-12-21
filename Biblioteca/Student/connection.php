<?php

$db=mysqli_connect("localhost","root","","biblioteca");//server name,username,password,database name

if(!$db)
{
    die("Connection failed: ". mysqli_connect_error());
}

//echo "Connection succesfully.";//------testare conexiune cu baza de date
?>