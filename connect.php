<?php

$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="survey_form";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

?>