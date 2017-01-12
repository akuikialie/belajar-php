<?php

/**
 * struktur switch
 *
 * Switch berfungsi untuk mencocokkan variabel dengan setiap case yang ada di dalamnya
 * jika case dengan variabel ada yang cocok, maka kode yang berada di dalam case
 * akan dieksekusi, setelah itu ada keyword "break"
 * untuk menghentikan pengecekean
 *
 * Syntax :
 *
 * switch (var) {
 *    case kondisi1:
 *        # kode dieksekusi jika var = konsisi1;
 *        break;
 *    case kondisi2:
 *        # kode dieksekusi jika var = kondisi2;
 *        break;
 *    default:
 *        # kode dieksekusi jika tidak ada yang sama dengan case;
 * }
 */

$a = 4;

switch ($a) {
    case 2:
        // Kode dibawah akan dieksekusi jika a = 2
        echo "a = 2";
        break;
    case 4:
        // Kode di bawah akan dieksekusi jika a = 4
        echo "a = 4";
        break;

    default:
        // Kode di bawah akan dieksekusi jika a tidak sama dengan 4 dan 2
        echo "a bukan 4 dan bukan 2";
        break;
}
