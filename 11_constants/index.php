<?php
/*
* Konstanta (constant) merupakan tipe data yang sekali nilainya ditentukan maka tidak akan bisa dirubah lagi
* Konstanta bisa ditentukan melalui dua cara, dengan keyword const atau fungsi define
* PSR menganjurkan konstanta agar dituliskan dengan huruf besar. Hal ini untuk membedakan konstanta dengan variabel
* Konstanta harus diawali dengan huruf atau underscore dan tidak mengandung simbol khusus
* konstanta dengan keyword const digunakan pada top-level scope, lingkungan global php
* konstanta dengan fungsi define digunakan pada level fungsi maupun kondisi
*/

const PHI = 3.14; //penulisan yang valid
echo PHI;
const _PHI = "Tiga koma empat belas"; //penulisan yang valid
echo _PHI;
const 2PHI__ = 6.28; //penulisan yang TIDAK valid
const phi_ = "22 per 7"; //penulisan yang valid tetapi tidak dianjurkan
echo phi_;
