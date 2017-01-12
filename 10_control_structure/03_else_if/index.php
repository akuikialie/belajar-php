<?php
/**
 * else if
 *
 * Pada dasarnya sama seperti if else biasa
 * tetapi else if bisa mengeksekusi kode jika memiliki lebih dari 1 kondisi
 *
 *  Sintax :
 *
 * if (condition) {
 *     # code...
 * } else if (condition) {
 *     # code...
 * } else {
 *     # code...
 * }
 */


$a = 9;

if ($a > 10) {
    // Kode akan langsung dieksekusi jika kondisinya benar
    echo "\$a lebih dari 10";
} else if ($a == 10) {
    // Kode akan dieksekusi jika kondisi pada if pertama salah
    // dan kondisinya benar pada if kedua
    echo "\$a sama dengan 10";
} else {
    // Kode akan dieksekusi jika kondisinya salah semua
    echo "\$a kurang dari 10";
}
