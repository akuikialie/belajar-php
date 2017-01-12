<?php

/* Expression adalah hal terpenting dalam pengembangan proyek menggunakan PHP. dalam PHP yang terpenting menggunakan PHP adalah menulis sebuah ekspresi. dan yang paling simple dan akurat untuk mendefinisikan ekspresi adalah "terserah apa yang ingin dibuat dalam value " */

/* Ekspresi adalah suatu bentuk yang menghasilkan suatu nilai. Dalam bentuk sederhana, ekspresidapat berupa konstanta atau variabeldalam bentuk yang lebih kompleks */

/* Ini ada contoh ekspresi yang melibatkan operator operator dan operand */

$e = 20 + 5 * 1;
echo $e;

/* sebuah ekspresi yang menghasilkan nilai 20 . dimana tanda + dan * sebagai operator */

/* Dan ada contoh yang lebih kompleks untuk ekspresi adalah fungsi */

function foo()
{
    return 5;
}

/* Dengan asumsi kamu sudah familiar dengan konsep dari function . Kalian berasumsi menulis $c = foo() adalah dasarnya dengan menulis $c = 5 dan anda benar. Fungsi adalah ekspresi dengan nilai yang sama dengan nilai yang dikembalikan karena foo() mengembalikan nilai 5. nilai ekspresi 'foo()' adalah 5. Biasanya fungsi tidak hanya mengembalikan nilai statis tetapi menghitung sesuatu */
