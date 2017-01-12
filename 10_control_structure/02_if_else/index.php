<?php

/**
 * if else
 * akan mengeksekusi kode di dalam if jika kondisinya benar
 * dan mengeksekusi kode di dalam else jika kondisinya salah
 *
 * Syntax
 * if (condition) {
 *     # code...
 * } else {
 *     # code...
 * }
 *
 *
 */

$a = 7;

if ($a < 5) {
    // Kode di dalam akan dieksekusi jika variabel a kurang dari lima
    // atau jika kondisinya benar
    echo "\$a lebih kurang dari 5";
} else {
    // Kode di dalam akan dieksekusi jika kondisi a kurang dari lima adalah salah
    // atau jika kondisinya salah
    echo "\$a lebih dari 5";
}
