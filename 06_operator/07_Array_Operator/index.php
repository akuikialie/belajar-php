<?php

	/** Operator Assignment: Array

	* Assigment array adalah operator assigment untuk menginput nilai kedalam array. 

	* Operator Array Merupakan operator untuk menangani data berupa Array. Array adalah kumpulan dari beberapa data yang tersusun dengan 

	* struktur yang tetap.

	* Contoh penggunaan operator array pada php: **/

	$a = array("a"=>"red", "b"=>"green");
	$b = array ("c"=>"blue","d"=>"yellow");
	$c = $a + $b; // menghasilkan union dari $a dan $b

	var_dump($c);