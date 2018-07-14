<?php

echo "\nNHENTAI.NET DOWNLOADER";
echo "\nBY ROMMYMAUL";

echo "\n\nGalleries: ";
$galleries = trim(fgets(STDIN));
echo "Total Pages: ";
$total = trim(fgets(STDIN));
echo "\n";
for($i=1;$i<=$total;$i++) {
$url = system("wget -q http://i.nhentai.net/galleries/".$galleries."/".$i.".jpg");
$file = $i.".jpg";
if(is_file($file)) {
echo "[•] Download ".$i.".jpg Success\n";
} else {
echo "[×] Download ".$i.".jpg Failed or not found\n";
}
}
