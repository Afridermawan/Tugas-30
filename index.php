<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> GT-Fondation School </title>
    <link href="foto/book.png" rel='shortcut icon'>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  </head>
  <body style="background: url('foto/social.jpg') no-repeat ;background-size: cover;width: 100%; background-attachment:fixed;">
    <img src="foto/d.png" class="logopic">
    <div class="legal">
      <h3> GT-Fondation School<h3>
    </div>
    <nav>
      <div class="profile">
          <ul>
            <li>
            <?php include 'login.php'; ?>
            </li>
          </ul>
      </div>
      <ul class="menu">
        <li><a href="" title="Home"><button style="background:none;border-radius:10px;color:#fff;font-size:25px;border:2px solid #fff">Home</button></a></li>
        <li><a href="index.php" title="Daftar"><button style="background:none;border-radius:10px;color:#fff;font-size:25px;border:2px solid #fff">Daftar</button></a></li>
        <li><a href="https://cursor97.blogspot.co.id/" title="Blog"><button style="background:none;border-radius:10px;color:#fff;font-size:25px;border:2px solid #fff">Blog</button></a></li>
      </ul>
    <header></header>
 <!--    <section> -->
    <article style="height: 900px">
    <header class="headersplit">
    <div class="container">
      <center>
        <div class="jumbotron">
          <h2 data-scrollreveal="enter from the top over 1.5s" data-sr-init="true" data-sr-complete="true">GT-Fondation School</h2>
          <h2 data-scrollreveal="enter from the top over 1.5s" data-sr-init="true" data-sr-complete="true">(GT-F School)</h2>
          <h3 data-scrollreveal="enter bottom but wait 1s" data-sr-init="true" data-sr-complete="true">Bootcamp batch #3</h3><br>
          <p data-scrollreveal="enter bottom but wait 1.5s" data-sr-init="true" data-sr-complete="true">Dengan membuka GT-Fondation School (GT-F School), PT. Dhezign Online Solution, sebuah perusahaan Developer Web, Mobile App, dan SEO membuka kesempatan bagi Anda yang ingin berkarir di dunia digital, internet dan startup. GT-F School saat ini membuka 3 kelas kursus &amp; pelatihan programmer (PHP, Android, IOS). Kelas ini cocok sekali untuk mereka yang baru lulus SMK, sedang kuliah, atau baru lulus kuliah dan ingin mahir dibidang pemograman dan mampu langsung bekerja di Industri Digital yang sedang haus developer.
          </p>
          <p data-scrollreveal="enter bottom but wait 1.5s" data-sr-init="true" data-sr-complete="true">Dijamin !! lebih jago ngoding dari pada lulusan S1 informatika, beasiswa GRATIS untuk 3 tahun.</p><br>
          <p data-scrollreveal="enter bottom but wait 2s" data-sr-init="true" data-sr-complete="true">
          <a href="form.php" style="color: #fff;text-decoration: none" class="btn btn-default btn-lg" role="button" target="_blank">Daftar Sekarang</a> 
          <!-- <a href="https://cursor97.blogspot.co.id/" style="color: #fff;text-decoration: none" class="btn btn-default btn-lg" role="button" target="_blank">Blog</a> -->
          </p>
          <h2 data-scrollreveal="enter from the top over 1.5s" data-sr-init="true" data-sr-complete="true">GT-Fondation School</h2></div>
        </div>
          </center>
        </div>
      </header>
    </article>
<!--     </section> -->
    <footer></footer>
  </body>
</html>