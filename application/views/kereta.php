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
