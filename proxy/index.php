<?php
error_reporting(0);
$d = hex2bin($url);
function getUrlMimeType($url) {
    $buffer = file_get_contents($url);
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    return $finfo->buffer($buffer);
}

if(isset($url)){
	header('HTTP/1.1 400 Bad request');
	die;
}

date_default_timezone_set('Europe/Berlin'); // Change this to your own timezone
$current_date = date('H:i:s - d/m/Y');
$mimetypes = ['image/png','image/jpg','image/jpeg','image/gif'];

$url = htmlentities($_GET['url']);
$mime = getUrlMimeType($url);

// if a valid MIME type exists, display the image
// by sending appropriate headers and streaming the file
foreach($mimetypes as $mimetype) {
	if ($mime == $mimetype){
		header('Content-type: '.$mime.';');
		if(isset($url)){
			echo file_get_contents($url);
			die;
		}
	}
} 

header('HTTP/1.1 403 Forbidden');