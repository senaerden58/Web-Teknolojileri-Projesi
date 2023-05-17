<?php
  $ad = $_POST['adım'];
  $soyad = $_POST['soyad'];
  $email=$_POST['emailim'];
  $ülke=$_POST['ülke'];
  $cinsiyet=$_POST['cinsiyet'];
  $acıklama=$_POST['acıklama'];
  
  echo("Ad: ");
  echo $ad;
  echo("<br>Soyad: ");
  echo $soyad;
  echo ("<br>Email: ");
  echo $email;
  echo("<br>Ülke: ");
  echo $ülke;
  echo("<br>Cinsiyet:  ");
  echo $cinsiyet;
  echo ("<br>Açıklama: ");
  echo $acıklama;



?>