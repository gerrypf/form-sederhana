<?php
  $host ="database-1.ckryivazzohc.us-east-1.rds.amazonaws.com"; //host server
  $user ="admin"; //user login phpMyAdmin
  $pass ="Grafando123"; //pass login phpMyAdmin
  $db ="testdb"; //nama database
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
?>
