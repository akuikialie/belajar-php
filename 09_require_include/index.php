<?php

	/** Basic Syntax: Require,Include

	* fungsi require dan include adalah suatu perintah atau fungsi di dalam php untuk menyisipkan sebuah file 

	* PHP kedalam file PHP yang lainya. Dengan menggunakan teknik penyisipan file php menggunakan fungsi include(), require()

	* akan sangat membantu kita dalam membuat kode program karena tidak perlu menuliskan kode program secara berulang - ulang. 

	* Contoh penulisan Require,Include : **/

	//menyisipkan file tes.php di sini
	include('tes.php');

	//syntax di bawah adalah isi dari file index.php
	echo "Belajar Include() dan Require()";