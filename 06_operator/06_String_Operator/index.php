<?php

/* PHP mempunyai 2 operator yang di desain untuk strings */

/* Concatenation */
/* untuk menyambung string 1 dengan string 2 menjadi satu rangkaian */

$a = 'Halo';
$b = ' Dunia';
echo $a . $b; /* Hasilnya string 1 dan string 2 menjadi 1 rangkaian "halo dunia" */
echo "------->concatenation";
echo '<br>';

/* Concatenation assignment */
/* seperti concatenation namun ini bersifat seperti menambahkan menjadi suatu rangkaian */

$x = 'Piye';
$y = ' Kabare';
echo $x .= $y; /* Hasilnya string 1 dan string 2 menjadi 1 rangkaian "Piye Kabare" */

echo "------->concatenation Assignment";
echo '<br>';
