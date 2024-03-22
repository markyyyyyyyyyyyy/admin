<?php 

$hostname = 'localhost';
$uname = 'root';
$password = '';
$database = 'admin_db';

$conn = new mysqli($hostname, $uname, $password, $database);

if (!$conn){

echo "mali code";

}
