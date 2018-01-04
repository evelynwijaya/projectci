<?
defined('BASEPATH') OR exit('No direct script access allowed');
Include('utama.php')
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lagu Anak</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body background=bg4.jpg>

    <div class="kop">
        <h1>Kereta Api</h1>
    </div>




    <div class="isi">

      <marquee direction="left" scrollamount="30" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()">
      <img src="/assets/img/kereta.png"></marquee>
      <p id="lagu">
        Naik Kereta Api..tut..tut..tut <br>
        Siapa Hendak Turut <br>
        Ke bandung..Surabaya..<br>
        Bolehlah Naik dengan Percuma <br>
        Ayo kawanku lekas naik <br>
        Kretaku tak berhenti lama <br>
      </p>
    </div>

  <a href="<?php echo site_url('utama')?>">BACK</a><br>

  </body>
</html>
