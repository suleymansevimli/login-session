<?php
    session_start();
    require 'config.php';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Kullanici Giriş Ekranı</title>
   </head>
   <body>
      <?php
      // oturum açılıp açılmadığı kontrol edilir
        if(isset($_SESSION['kullanici_adi'])){
          //açılmışsa bu alan çalışır
          include('admin.php');
        }else{
          // açılmamışsa bu alan çalışır
          include('giris.php');
        }
      ?>
   </body>
 </html>
