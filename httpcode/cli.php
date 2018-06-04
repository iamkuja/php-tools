<?php

// fb.com/iamkuja
// github.com/iamkuja
// iamkuja.github.io

function shell_list($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	$cek = curl_getinfo($ch)['http_code'];
	curl_close($ch);
	return $cek;
}

echo "
__  __    _    _____  ____
\ \/ /___(_)__/ / _ \/ __/
 \  / __/ / _  / // / _ \ 
 /_/_/ /_/\_,_/\___/\___/ 
                          
";

echo "Your list: ";
$list = trim(fgets(STDIN));
$ambil = file_get_contents($list);

foreach(explode("\n",$ambil) as $link) {
	$site = shell_list($link);

	if($site != 200) {
		echo "[-] $link => $site ERROR!\n";
	} else {
		echo "[-] $link => $site FOUND!\n";
		fwrite(fopen("result.txt", "w"), $link."\n");
	}
}

if(is_file("result.txt")) {
	echo "Result saved: result.txt\n";
}