<?php

$path ="./uploads";

if (isset($_GET['path'])) {
	$path = $_GET['path'];
} 

// get an instance of the Directory Class
$listdir = dir($path);

// iterate the directory
while ($file =  $listdir->read()) {
	if (!is_dir($file)) {
	echo "<p><a href=processCSV.php?file=./uploads/$file>".$file."</a></p>";
	}
}

 

?>