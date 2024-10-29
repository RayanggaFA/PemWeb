<?php
	$bintang=5;
	for( $a=$bintang;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$bintang;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}


	for( $a=1;$a<=$bintang;$a++){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$bintang;$a1>=$a;$a1-=1){
		echo"*";
	}
	echo"<br>";
	}
    ?>
