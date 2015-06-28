<?php
require_once ("functions.php");

session_start();
error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysql_connect("localhost","root","");
$db = mysql_select_db("newsweb");
mysql_query("set charset utf-8");
error_reporting(E_ALL ^ E_DEPRECATED);
?>

