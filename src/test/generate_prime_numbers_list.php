<?php

$prime_numbers_list = [];

function is_prime($num) {

	for ($div = (int)($num/2); $div>1; $div--) {
		if ($num % $div == 0) return false;
	}

	return true;

}

for ($n=10000;$n<100000;$n++) {

	if (is_prime($n)) $prime_numbers_list[] = $n;

}


$file_content = "";

foreach ($prime_numbers_list as $num) {
	$file_content .= $num."\n";
}

file_put_contents('/home/marco/SoftwareProjects/MBCRAFT/SitoWebMBCraft/src/test/prime_numbers_list.txt',$file_content);