<?php
$servername="localhost";
$dbhusername="root";
$dbhpassword="";
$dbhname="savelives";

$conn=mysqli_connect($servername,$dbhusername,$dbhpassword,$dbhname);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}