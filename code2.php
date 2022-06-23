<?php
if(!empty($_GET['file']))
{
	$filename=basename($_GET['FILE']);
	$filepath='destination/'.$filename;
	if(!empty($filename)&&file_exists($filepath)){
	header("cache-control:public");
	header("content-description: File Transfer");
	header("content-disposition:attachment;filename=$filename");
	header("content-transfer-emcoding:binary");
	readfile($filepath);
	exit;
	}
	else{
	echo"this file does not exist.";
	}
}
?>