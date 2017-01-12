<?php

/**
 * Break
 *
 * Break digunakan untuk menghentikan looping yang ada di
 * switch, for, foreach, while, do-while
 *
 * contoh
 */

for ($i = 0; $i < 3; $i++) {
    if ($i == 2) {
        break; // Jika variabel $i bernilai 2,
    }
    echo $i; // kode disini tidak akan tereksekusi setelah variabel $i bernilai 2
}

// Kode diatas menghasilkan keluaran
// 01
//
// Kenapa cuman sampai 1 ? karena saat variabel $i nya bernilai 2, looping dihentikan
// jadi belum sempat untuk mencetak variabel $i nya
