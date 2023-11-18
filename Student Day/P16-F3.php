<?php
//LOOPING MATERI MAKE DO - WHILE 
//Mengerjakan dulu baru mikir

$a = 1;
do {
    echo "$a. StudentDay <b>Web Programing</b><br>";
    $a++;
} while ($a <= 10);

echo "<br>";
echo "<hr>";
echo "<br>";

//Buat Bilangan ganjil dan genao dengan increment dan decrement

echo "<h3>Bilangan Genap Decrement</h3>";

$b = 20;
do {
    echo "$b. DO it c'mon<br>";
    $b-=2;
} while ($b >= 1);

echo "<br>";
echo "<hr>";
echo "<br>";

echo "<h3>Bilangan Ganjil Increament</h3>";

$c = 11;
do {
    echo "$c. <b>NAISE</b><br>";
    $c+=2;
} while ($c <= 30);