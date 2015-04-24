<?php
session_start();
include("fonctions.php");

ini_set('session.gc_maxlifetime', 0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LCEsa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

<div class="page-header">
<a href="index.php"> <p><h1>LCE<small>sa</small></h1></p> </a>
<p><?php setlocale(LC_TIME, 'fra_fra'); echo strftime('%A %d %B %Y, %H:%M');?> </p>
</div>
