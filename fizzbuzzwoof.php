<?php
/*Fizz Buzz Woof sample program by saran*/
echo "FizzBuzzWoof program<br/>********************<br/><br/>";
foreach(range(1,100) as $i):
	$temp = $i;
	$fizz = $buzz = $woof = "";
	while($temp>0):
		$fizz .= ($temp%10 == 3)? "Fizz":"";
		$buzz .= ($temp%10 == 5)? "Buzz":"";
		$woof .= ($temp%10 == 7)? "Woof":"";  
		$temp/=10;
	endwhile;
	echo ($i%3)?(($i%5)? (($i%7)?(($fizz==""&&$buzz==""&&$woof=="")?$i:$fizz.$buzz.$woof): $fizz.$buzz.$woof."Woof") : (($i%7)?$fizz.$buzz."Buzz".$woof:$fizz.$buzz."Buzz".$woof."Woof")):(($i%5)? ($i%7)?($fizz."Fizz".$buzz.$woof):$fizz."Fizz".$buzz.$woof."Woof": (($i%7)?$fizz."Fizz".$buzz."Buzz".$woof : $fizz."Fizz".$buzz."Buzz".$woof."Woof")),"<br/>";
endforeach;
?>
