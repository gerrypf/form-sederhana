<?php
  include "config.php";
  $name  = $_REQUEST['nama'];
  $telp  = $_REQUEST['no_hp'];
  $email = $_REQUEST['email'];
  $mysqli  = "INSERT INTO input_tabel (nama, no_hp, email) VALUES ('$name', '$telp', '$email')";
  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

  mysqli_close($conn);
?>
