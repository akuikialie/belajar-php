<?php

/**
 * Continue
 *
 * Berfungsi untuk melewati looping
 * melewati di sini berarti melanjutkan looping selanjutnya
 */

 for ($i = 0; $i < 5; $i++) {
     if ($i == 2) {
         continue; // Jika variabel $i bernilai 2,
     }
     echo $i; // kode disini tidak akan tereksekusi jika variabel $i bernilai 2
 }

 // Kode diatas akan menghasilkan keluaran
 // 0134
 //
 // Kok 2 nya nggak ada ? Karena saat variabel $i nya bernilai 2
 // perulangan dilewati, dan dilanjutkan ke perulangan berikutnya
