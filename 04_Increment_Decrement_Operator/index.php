<?php

/* Sesuai dengan namanya Operator Increment Decrement
berfungsi untuk menaikan dan menurunkan nilai dari
variabel */

/* Pre Increment */
/* Untuk Menaikan jumlah nilai dengan menambahkan satu
nilai angka */

$x = 10;
echo ++$x;
/* Hasilnya menjadi 11 karena nilai 10 sudah
ditambahkan dengan nilai 1 angka dengan pre increment */
echo "------>Pre Increment";
echo '<br>';

/* Post Increment */
/* Menghasilkan Nilai dari $x , Kemudian menaikan
nilai $x dengan satu */

$a = 10;
echo $a++; /* Hasilnya adalah 10 karena masih belum
ada tambahan ekspresi untuk menambahkan nilai tersebut */
echo "------>Post Increment";
echo '<br>';

/* Pre Decrement */
/* Untuk menurunkan jumlah nilai dengan mengurangi satu nilai angka */

$b = 10;
echo --$b;/* Hasilnya adalah 9 karena nilai 10 sudah
dikurangi dengan nilai 1 angka dengan pre decrement */

echo "------>Pre decrement";
echo '<br>';

/* Post Decrement */
/* Menghasilkan NIlai dari $c, kemudian menurunkan
nilai $c dengan satu */

$c = 10;
echo $c--;/* Hasilnya adalah 10 karena masih belum
ada tambahan ekspresi untuk mengurangi nilai tersebut */

echo "------>Post decrement";
echo '<br>';
