<?php
require_once ("config.php");
error_reporting(E_ALL ^ E_DEPRECATED);


//session_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The Web News</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />

<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="ie.css" /><![endif]-->
</head>
<body>
<!-- BEGIN wrapper -->
<div id="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <ul>
        
    </ul>
      
    <p class="links"> 
        <a href="login.php">Login</a> | <a href="signup.php">Register</a> </p>
    <div class="break"></div>
    <div class="logo">
      <h1><a href="">The Web News</a></h1>
      <p><img src="rss.png"/></p>
    </div>
    <div class="ad468x60">  </div>
    <div class="break"></div>
    <ol>
     <li class="f"><a href="index.php">Home</a></li>
     <li><a href="login.php">log in </a></li>
        <li><a href="signup.php">sign up </a></li>
        <li><a href="enter_news.php">enter news</a></li>
        <li><a href="remove_xml.php">remove news</a></li>
        <li><a href="logout.php">log out</a></li>
    </ol>
    <div class="break"></div>
  </div>
  <!-- END header -->
