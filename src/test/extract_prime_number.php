<?php


function extract_random_prime_5_digits() {

	$file_content = file_get_contents('/home/marco/SoftwareProjects/MBCRAFT/SitoWebMBCraft/src/test/prime_numbers_list.txt');

	$prime_number_list = explode("\n",$file_content);

	return $prime_number_list[rand(0,count($prime_number_list))];
}

echo extract_random_prime_5_digits();