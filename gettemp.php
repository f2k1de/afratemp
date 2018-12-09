<?php
$url = 'https://afra.fe80.eu/temp.js';
$filename = 'afra.csv';
$file = file_get_contents($filename);
$content = file_get_contents($url);
$content = json_decode($content,true);

if(isset($content['data']['temp'])) {
    $file .= time() . ";" . $content['data']['temp'] . ";" . $content['data']['humidity'] . "\n";
    file_put_contents($filename, $file);
} else {
    die('No data given.');
}