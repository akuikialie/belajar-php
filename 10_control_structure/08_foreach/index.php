<?php

/**
 * Perulangan foreach
 *
 * digunakan untuk perulangan array atau objek
 *
 * ada 2 cara memakai foreach
 * Sintax1 :
 * foreach ($variable as $key => $value) {
 *     // Kode yang akan dieksekusi
 * }
 *
 * Sintax2 :
 * foreach ($variable as $value) {
 *     // Kode yang akan dieksekusi
 * }
 *
 * perbedaannya hanya terletak pada variabel $key
 * pada syntax1 terdapat variabel key
 * yang digunakan untuk mengulangi semua index yang ada dalam array
 * dan pda syntax2 tidak terdapat variabel key
 *
 * item pada setiap index array bisa diakses melalui variabel $value
 */


$a = [1, 2, 4, 6];

foreach ($a as $key => $value) {
    echo $key . ' - ' . $value . '<br />';
}

// akan menghasilkan keluaran:
// 0 - 1
// 1 - 2
// 2 - 4
// 3 - 6
//
// sisi kiri merupakan index pada array dan di sisi kanan adalah
// value yang terdapat pada tiap item array $a
