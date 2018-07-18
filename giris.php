<?php
    if (isset($_POST['button'])) {
  // Post'dan gelen kullanici_adi ve sifre değerlerini config dosyamızın içerisindeki veriler ile karşılaştırıyoruz.
      $kullanici_adi = $_POST['kullanici_adi'];
      $sifre = $_POST['sifre'];
      if (!$kullanici_adi || !$sifre) {
        $hata = "Lütfen Boş alanları doldurunuz";
      }elseif ($kullanici_adi != $uye['kullanici_adi']) {
        $hata="lütfen kullanici adinizi kontrol ediniz";
      }elseif ($sifre != $uye['sifre']) {
        $hata = "lütfen şifrenizi kontrol ediniz";
      }else{
          $_SESSION['zaman'] = time()+10;
          $_SESSION['kullanici_adi'] = $kullanici_adi;
          // Ana Sayfamıza yönlendirme yapıyoruz
          // -> nokta kendi dizinine yönlendirir
          header("Location:.");
      }
    }
 ?>
 <!-- bu alanda da herhangi bir hatamız var ise div içerisine bu hatanın basılmasını sağlıyoruz. -->
<?php if (isset($hata)): ?>
  <div style="background-color:red;color:#fff;text-align:center;">
    <?php
          echo $hata;
    ?>
  </div>
<?php endif; ?>
<!-- Giriş Formumuzu oluşturduk -->
<form class="" action="" method="post" style="text-align:center;margin-top:50px;">
<label for="kadi">Kullanıcı Adı</label>
    <input id="kadi" type="text" name="kullanici_adi" value="">
<label for="sfr">Şifre</label>
    <input id="sfr" type="password" name="sifre" value="">
    <button type="submit" name="button">Giriş Yap</button>
</form>
