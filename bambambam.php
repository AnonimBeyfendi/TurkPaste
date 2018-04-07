<?php
if ($_POST) {
	$baslik = $_POST["baslik"];
	$metin = $_POST["metin"];
	$isim = rand(1,999999);
	$isim2 = rand(1,999999);
	$isim3 = rand(1,999999);
	touch("yapistirildi/".$isim."-".$isim2."-".$isim3.".html");
	$dosya = fopen("yapistirildi/".$isim."-".$isim2."-".$isim3.".html", 'w');
	fwrite($dosya, "<!DOCTYPE html>
<html>
<head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta name='content-type' content='text/html charset=utf-8' />
	<meta http-equiv='content-type' content='text/html charset=utf-8' />
	<meta name='content-language' content='tr-TR' />
	<meta name='language' content='Turkish' />
	<meta name='copyright' content='(c) 2018 TurkPaste (turkpaste.com) Tüm Hakları Saklıdır.' />
	<meta name='description' content='TurkPaste - Türkiyenin en iyi metin depolama platformu.' />
	<meta name='keywords' content='turkpaste,paste,yapistir,metin,kod' />
	<meta name='robots' content='noindex,nofollow' />
	<title>TurkPaste - Yapıştır Gitsin !</title>
    <link rel='stylesheet' href='../style.css'>
    <script defer src='https://use.fontawesome.com/releases/v5.0.6/js/all.js'></script>
</head>
<body bgcolor='#99ebff'>
<section class='hero is-primary'>
  <div class='hero-body'>
    <div class='container'>
      <h1 class='title'>
        TurkPaste
      </h1>
      <h2 class='subtitle'>
        ".$baslik."
      </h2>
    </div>
  </div>
</section>
<center>
ooo hoşgeldin sefalar getirdin iyi okumalar
<textarea class='textarea'>".$metin."</textarea>
<br>
<img src='../img/reklam.png'>
</body>
</html>");
	fclose($dosya);
	header ('Location:yapistirildi/'.$isim."-".$isim2."-".$isim3.'.html'); 
}
?>