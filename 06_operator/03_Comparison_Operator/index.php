<?php


/* Operator Comparison Digunakan untuk mengcompare dua
values */

/* Nama operator ini adalah equal Dan ini merupakan operator sama dengan yag artinya
nilai 1 dan nilai 2 adalah sama */

$a = 10;
$b = "10";

$c = ($a == $b);
var_dump($a == $b); /* Hasilnya benar karena nilainya sama */
echo "--->equal";
echo '<br>';

/* Nama operator ini adalah identical Dan ini sama halnya dengan yang diatas namun agak
berbeda karena sama dengannya ada 3 . hal ini sebagai
indentifikasi dari variable tersebut. */

$x = 10;
$y = 110;

$z = ($x === $y);
var_dump($x === $y); /* Hasilnya Salah Karena nilainya
tidak sama */
echo "--->identical";
echo '<br>';

/*Nama operator ini adalah Not equal Dan operator ini menyatakan bahwa nilainya tidak sama */

$m = 10;
$n = 100;

$o = ($m != $n);
var_dump($m != $n); /* Hasilnya salah karena NIlainya sama */
echo "--->Not equal";
echo '<br>';

/* Nama operator ini juga NOt equal Operator ini mendefinisikan tidak sama */

$v = 10;
$w = 110;
$y = ($v <> $w);
var_dump($v <> $w); /* Hasilnya betul jika nilainya tidak sama */
echo "--->Not Equal 2";
echo '<br>';

/* Nama opertor ini adalah not identical */

$g = 100;
$h = "100";
$i = ($g !== $h);
var_dump($g !== $h); // Hasillnya betul karena nilainya adalah sama */
echo "--->Not Identical";
echo '<br>';

/* Nama operator ini adalah grater than .
mendefinisikan bahwa nilai 1 lebih besar dari pada
nilai 1 */

$p = 200;
$q = 100;

var_dump($p > $q);/* Hasilnya betul karena Nilai 1 Lebih besar daripada Nilai yang kedua */
echo "--->Greater Than";
echo '<br>';

/* Nama Operator Ini adlah less than yang artinya memiliki nilai kurang dari */

$p = 100;
$q = 200;

var_dump($p < $q);/* Hasilnya Betul karena Nilai satu kurang dari NIlai 2 */
echo "--->Less Than";
echo '<br>';


/* Nama operator ini adalah greater than or equal to
yang artinya lebih dari atau sama dengan */

$p = 100;
$q = 100;

var_dump($p >= $q);/* hasilnya adalah betul karena
hasilnya adalah sama karena aturan dari operator ini
adalah lebih dari atau sama dengan */
echo "--->greater than or equal to";
echo '<br>';

/* Nama operator ini adalah Less than or equal to yang artinya kurang dari atau sama dengan */
$p = 300;
$q = 100;

var_dump($p <= $q);/* Hasilnya salah karena Nilai 1 lebih besar daripada nilai kedua padahal aturan di operator ini adalah jika kurang dari atau sama dengan */
echo "--->Less than or equal to";
echo '<br>';
