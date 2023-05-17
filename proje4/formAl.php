<?php
$eposta = "tayfunerbilen@gmail.com";
if ( filter_var($eposta, FILTER_VALIDATE_EMAIL) ){ 
   print 'e-posta gecerli';
} else {
   print 'e-posta gecersiz!';
}
?>