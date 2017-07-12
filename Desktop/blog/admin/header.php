<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Blog</title>

  <?php
  $serverName = "http://".$_SERVER['SERVER_NAME'].'/blog/';
  define('BASEURL', $serverName);
  ?>

  <!-- Custom styles for this template -->
  <link href="<?php echo $serverName.'assets/css/global.css';?>" rel="stylesheet">
</head>

<body>

<div class="container">

  <!-- Static navbar -->
