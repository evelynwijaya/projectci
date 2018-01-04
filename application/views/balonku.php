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
            <h1>Balonku</h1>
        </div>

        <div class="isi">
          <marquee direction='up' scrollamount="15"><img id="balon"src="/assets/img/balon.png"></marquee>

          <p id="lagu">
            Balonku Ada Lima <br>
            Rupa-rupa Warnanya <br>
            Hijau Kuning Kelabu Merahmuda dan Biru <br>
            Meletus balon hijau..duarr..<br>
            Hatiku sangat kacau..<br>
            Balonku tinggal empat <br>
            Ku pegang erat-erat <br>
          </p>
        </div>
<a href="<?php echo site_url('utama')?>">BACK</a><br>

  </body>
</html>
