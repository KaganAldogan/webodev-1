<html>

<head>

<title> Web Programlama Dersi </title>
<meta charset="UTF-8">
<meta name="keywords" content="Web,Php,Mvc,Programlama">
<meta name="description" content="Abc firması.. Alanda.. yılından beri hizmet vermektedir.">
<meta name="author" content="...Yazılım">

</head>

<body>
<h4>Php Programlama</h4>

<?php
/* php açılama satırları*/
//Tek satır açıklama 

echo "<h3>Php Dersi</h3>";
echo "<h3>ADÜ -AYMES</h3>; <hr> Bilgisayar Programcılığı"; 

echo "<h3> Değişken Tanımlamada Dikkat Edilecek Hususlar</h3>";

echo"<ol>
<li>Php'de değişken isimleri $ işareti ile başlar.</li>
<li>Php'de değişken isimleri sayısal ifadlerle başlayamaz.</li>
<li>Php'de değişken isimleri iki kelimeden oluşuyorsa -veya _ kullanılır.</li>
<li>Php'de değişken isimlerinde Türkçe karakter kullanılmamalıdır(ö,ç,ğ,ü..).</li>
<li>Php'de değişken isimlerinde büyük-küçük harf duyarlılığı vardır.</li>
<li>Php'de değişken içeriğinde eğer metinsel idafe varsa \" veya ' kullanılır. </li>
<li>Php'de değişken içeriğinde eğer sayısal ifade varsa tırnak kullanmadan direk yazılır.</li>
";

echo"<h3>Değişken Tanımlama Örnekleri </h3>";

$isim="Kağan";
$soyisim="Aldoğan";
echo "$isim $soyisim <br>";  //echo  $isim ." ".$soyisim;
echo '$isim $soyisim <br>';  //echo $isim." ".$soyisim;




?>



</body>

</html>