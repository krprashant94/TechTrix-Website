<?php
function getImg($type){
	//var_dump($type);
	$dir_name = "images/".$type;
	$dir = new DirectoryIterator(dirname($dir_name));
	$files = scandir($dir_name);
	$paintings = array();
	foreach ($files as $file) {
	    if($file == '.' || $file == '..')continue;
	    array_push($paintings, $file);
	}
	return $paintings;
}
?>