<?php

	/** Basic Syntax: Variables Assignment

	* Assignment adalah operator untuk menambahkan, atau memasukkan sebuah nilai kedalam variabel.
	* PHP memiliki 3 jenis operator assigment, dan kita telah menggunakan 1, yaitu tanda = untuk mengdefenisikan variabel.
	**/


	$a = 5;
	$b = 10;
	$c = 15;
 
	echo "\$a = $a, \$b = $b, \$c = $c";
	echo "<br />";
	// apabila code dijalankan, akan muncul seperti : $a = 20, $b = 15, $c = 5
 
	$a = $b = $c+5;
	echo "\$a = $a, \$b = $b, \$c = $c";
	// apabila code dijalankan, akan muncul seperti : $a = 10, $b = 10, $c = 5