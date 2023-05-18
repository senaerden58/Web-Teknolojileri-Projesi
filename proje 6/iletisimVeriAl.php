<?php
  $ad = $_POST['adım'];
  $soyad = $_POST['soyad'];
  $email=$_POST['emailim'];
  $ülke=$_POST['ülke'];
  $cinsiyet=$_POST['cinsiyet'];
  $acıklama=$_POST['acıklama'];

  if(empty($ad) || empty($soyad)|| empty($email)||empty($cinsiyet))
  { 
    echo 'Lütfen boş bırakmayın'.'<br>';
    echo("<a href='http://localhost/iletisimSayfas%C4%B1.html'>İletişim sayfasına dönünüz.</a>"."<br>");
  } 
  else 
  {
       print('İletişim bilgileri başarı ile gözükmüştür.<br>');
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
      
    }
  
  
  



?>