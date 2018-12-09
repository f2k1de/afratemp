<?php
$url = 'https://spaceapi.afra.fe80.eu/v1/status';
$filename = 'afraopen.csv';
$file = file_get_contents($filename);
$content = file_get_contents($url);

if(isset($content)) {
    $file .= time() . ";" . $content . "\n";
    file_put_contents($filename, $file);
} else {
    die('No data given.');
}
