<?
defined('BASEPATH') OR exit('No direct script access allowed');
Include('utama.php')
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lagu Anak</title>
    <style>
    body {
      background-color: #ffddee;
      margin: 40px;
      font: 13px/20px normal Helvetica, Arial, sans-serif;
      color: #4F5155;
    }

a:link,a:visited,a:active
{
width: 200px;
margin: 2px;
background-color: #a31b5f;
color: #fff;
padding: 10px 25px;
text-align: center;
text-decoration: underline;
display: inline-block;

}

a{
  text-align: center;
}

a:hover
{
  width: 200px;
  margin: 2px;
  background-color: #d17ba6;
  color: #fff;
  padding: 10px 25px;
  text-align: center;
  text-decoration: underline;
  display: inline-block;

}

img
{
  width: 400px;
  height: 200px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

#balon
{
    width: 200px;
    height: 300px;
}

p{
  text-align: center;
}

.isi{
  text-align: center;
}
    </style>
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
