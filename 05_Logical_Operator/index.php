<?php

/* Logical Operator Digunakan untuk mengkombinasi
kondisi dari sebuah statement */

/* Operator AND */
/* Digunakan untuk mengkondisikan kedua statement*/

$a = 20;
$b = 30;

if($a == 20 and $b == 30)
{
    echo 'halo dunia'; /* Hasilnya halo dunia karena
    dalam statement tersebut artinya jika $a bernilai 20 dan $b bernilai 30 maka akan print kata halo dunia */
}
echo "---------->Operator AND";
echo '<br>';

/* Operator OR */
/* Untuk memilih salah satu pilihan statement yang
benar antara $a dan $b */

if ($a == 20 or $b == 50)
{
    echo 'Piye Kabare'; /*Hasilnya Piye Kabare karena
    statment tersebut memilih $a karena nilai dari $a
     yang benar */
}

echo "---------->Operator OR";
echo '<br>';

/* Operator XOR */
/* sama seperti OR namun statement ini hanya memilih
salah satu yang benar . dan tidak kedua duanya */

if ($a == 50 xor $b == 60)
{
    "Apik Apik Wae"; /*Hasilnya kalimat "Apik Apik Wae
    "Tidak muncul karena semua nilai dimasing masing
    variabel salah */
}

echo "---------->Operator XOR";
echo '<br>';

/* Operator && */
/* Digunakan untuk mengkondisikan kedua statement*/

if($a == 20 && $b == 30)
{
    echo 'halo dunia'; /* Hasilnya halo dunia karena
    dalam statement tersebut artinya jika $a bernilai 20 dan $b bernilai 30 maka akan print kata halo dunia */
}
echo "---------->Operator &&";
echo '<br>';

/* Operator || */
/* sama seperti operator OR yaitu Untuk membuat salah
statement yang benar antara $a dan $b */

if ($a == 20 || $b == 50)
{
    echo 'Piye Kabare'; /*Hasilnya Piye Kabare karena
    statment tersebut memilih $a karena nilai dari $a
     yang benar */
}

echo "---------->Operator ||";
echo '<br>';

/* operator ! */
/* untuk memberi statement bukan dari nilai variabel tersebut */

if ($a !== 70)
{
    echo "berhasil"; /*Hasilnya Muncul kalimat "berhasil" karena nilai dari $a bukan 70 melainkan 20 */
}

echo "---------->Operator !";
echo '<br>';
