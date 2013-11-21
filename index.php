<?php

include "simple_html_dom.php";

$url = $_GET['url'];

// TO DO controllo url
$html = file_get_html($url);
$title = $html->find('title', 0)->plaintext;

$favicon = 'http://g.etfv.co/'.$url;

header('Content-type: application/json');
echo json_encode(array('favicon' => $favicon, 'title' => $title));