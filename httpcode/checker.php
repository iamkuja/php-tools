<html>
<head>
<title>./iamkuja</title>
<style type="text/css">
	textarea {
		width: 30%;
		height: 150px;
	}

	input[type=submit] {
		width: 10%;
		height: 30px;
		margin-top: 2px;
	}
</style>
</head>
<h1>HTTP Status Code Checker</h1>
<form method="post">
<textarea name="url"></textarea><br>
<input type="submit" name="submit" value="SCAN">
</form>
<?php

// fb.com/iamkuja
// github.com/iamkuja
// iamkuja.github.io

function shell_list($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$exec =  curl_exec($ch);
	$cek = curl_getinfo($ch)['http_code'];
	curl_close($ch);
	return $cek;
}

$url = $_POST['url'];

if($_POST['submit']) {
	foreach (explode("\r\n",$url) as $link) {
		$site = shell_list($link);
		if($site != 200) {
			echo "<b>[+] $link => <font color='red'>$site ERROR!</font></b><br>";
		} else {
			echo "<b>[+] <a style='color: black' href='$link' target='_blank'>$link</a> => <font color='green'>$site FOUND!</font></b><br>";
		}
	}
}
?>
