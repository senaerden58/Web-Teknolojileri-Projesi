<?php
if(isset($_POST['kullaniciAdi']) && isset($_POST['sifre'])) { 
   $kullanici = $_POST['kullaniciAdi'];
   $sifre = $_POST['sifre'];
 
   if(empty($kullanici) || empty($sifre)) { 
      echo 'Lütfen boş bırakmayın';
   } else {
      if($kullanici == 'b211210041@sakarya.edu.tr' && $sifre == '1234') { 
         session_start();
         $_SESSION['kullaniciAdi'] = 'b211210041@sakarya.edu.tr';
         $_SESSION['sifre'] = '1234';
         echo "<h2>Hoşgeldiniz!</h2>";
         echo  $kullanici."<br>" ;
         echo 'Giriş yaptınız!<br>';
         print('<a href="Kişisel web sayfası.html">Kişisel web sayfasına Dön!</a>');

      } else {
         echo "<h2>UYARI!</h2>";
         echo 'Yanlış kullanıcı adı ya da şifre<br>';
         
      }
   }
} else {
   echo 'Lütfen formu kullanın';
}

$kullaniciAdi = $_POST['kullaniciAdi'];
$kullaniciAdi  = filter_var($kullaniciAdi , FILTER_SANITIZE_EMAIL);
 
if (filter_var($kullaniciAdi , FILTER_VALIDATE_EMAIL)) {
  echo 'Geçerli bir e-posta adresi girdiniz.';
} else {
   print 'Geçersiz bir e-posta adresi girdiniz.';
   print ('Lütfen bütün alanlari eksiksiz olarak doldurunuz. <br>'); 
   print('<a href="Giris.html">Form Sayfasina Geri Dön</a>');
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
